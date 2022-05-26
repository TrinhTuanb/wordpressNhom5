<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Plugins_BandwidthMonitorPlugin implements Swift_Events_SendListener, Swift_Events_CommandListener, Swift_Events_ResponseListener, Swift_InputByteStream
{
 private $out = 0;
 private $in = 0;
 private $mirrors = [];
 public function beforeSendPerformed(Swift_Events_SendEvent $evt)
 {
 }
 public function sendPerformed(Swift_Events_SendEvent $evt)
 {
 $message = $evt->getMessage();
 $message->toByteStream($this);
 }
 public function commandSent(Swift_Events_CommandEvent $evt)
 {
 $command = $evt->getCommand();
 $this->out += \strlen($command);
 }
 public function responseReceived(Swift_Events_ResponseEvent $evt)
 {
 $response = $evt->getResponse();
 $this->in += \strlen($response);
 }
 public function write($bytes)
 {
 $this->out += \strlen($bytes);
 foreach ($this->mirrors as $stream) {
 $stream->write($bytes);
 }
 }
 public function commit()
 {
 }
 public function bind(Swift_InputByteStream $is)
 {
 $this->mirrors[] = $is;
 }
 public function unbind(Swift_InputByteStream $is)
 {
 foreach ($this->mirrors as $k => $stream) {
 if ($is === $stream) {
 unset($this->mirrors[$k]);
 }
 }
 }
 public function flushBuffers()
 {
 foreach ($this->mirrors as $stream) {
 $stream->flushBuffers();
 }
 }
 public function getBytesOut()
 {
 return $this->out;
 }
 public function getBytesIn()
 {
 return $this->in;
 }
 public function reset()
 {
 $this->out = 0;
 $this->in = 0;
 }
}
