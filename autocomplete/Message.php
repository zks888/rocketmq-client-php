<?php

/**
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

namespace RocketMQ;

/**
 * 消息对象
 * Class Message
 * @package RocketMQ
 */
class Message
{
    /**
     * @var MQMessage
     */
    private $message;

    /**
     * Message constructor.
     *
     * @param string $topic //topic
     * @param string $tags //tags
     * @param string $body //消息内容
     * @param string $keys //可以设置业务相关标识，用于消费处理判定，或消息追踪查询
     */
    public function __construct(string $topic, string $tags, string $body, string $keys = null){
    }

    /**
     * @return MQMessage
     */
    public function getMQMessage(){
        return $this->message;
    }

    /**
     * @param string $name
     * @param string $value
     * @return void
     */
    public function setProperty($name, $value){
    }

    /**
     * @param string $name
     * @return string
     */
    public function getProperty($name){
        return '';
    }

    /**
     * @return string
     */
    public function getTopic(){
        return '';
    }

    /**
     * @param string $topic
     * @return void
     */
    public function setTopic(string $topic){
    }

    /**
     * 在消费消息时可以通过tag进行消息过滤判定
     *
     * @param string $tags
     * @return void
     */
    public function setTags(string $tags){
    }

    /**
     * @return string
     */
    public function getKeys(){
        return '';
    }

    /**
     * 可以设置业务相关标识，用于消费处理判定，或消息追踪查询
     *
     * @param string $keys
     * @return void
     */
    public function setKeys(string $keys){
    }

    /**
     * @return int
     */
    public function getDelayTimeLevel(){
        return 0;
    }

    /**
     * 消息延迟处理级别，不同级别对应不同延迟时间
     *
     * @param int $delayTimeLevel
     * @return void
     */
    public function setDelayTimeLevel(int $delayTimeLevel){
    }

    /**
     * @return bool
     */
    public function isWaitStoreMsgOK(){
        return true;
    }

    /**
     * 在同步刷盘情况下是否需要等待数据落地才认为消息发送成功
     *
     * @param bool $waitStoreMsgOK
     * @return void
     */
    public function setWaitStoreMsgOK($waitStoreMsgOK){
    }

    /**
     * @return int
     */
    public function getFlag(){
        return 0;
    }

    /**
     * @param int $flag
     */
    public function setFlag(int $flag){
    }

    /**
     * @return int
     */
    public function getSysFlag(){
        return 0;
    }

    /**
     * 记录一些系统标志的开关状态，MessageSysFlag中定义了系统标识
     * @param int $sysFlag
     */
    public function setSysFlag(int $sysFlag){
    }

    /**
     * @return string
     */
    public function getBody(){
        return '';
    }

    /**
     * Producer要发送的实际消息内容，以字节数组形式进行存储。Message消息有一定大小限制。
     * @param string $body
     */
    public function setBody(string $body){
    }

    public function getProperties(){
    }

    /**
     * @param array $properties
     */
    public function setProperties(array $properties){
    }

    /**
     * @return string
     */
    public function toString(){
        return '';
    }
}
