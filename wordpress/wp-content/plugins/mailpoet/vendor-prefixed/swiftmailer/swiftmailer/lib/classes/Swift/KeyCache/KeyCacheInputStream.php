<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
interface Swift_KeyCache_KeyCacheInputStream extends Swift_InputByteStream
{
 public function setKeyCache(Swift_KeyCache $keyCache);
 public function setNsKey($nsKey);
 public function setItemKey($itemKey);
 public function setWriteThroughStream(Swift_InputByteStream $is);
 public function __clone();
}
