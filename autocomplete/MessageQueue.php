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
 * 消息队列对象
 * Class MessageQueue
 * @package RocketMQ
 */
class MessageQueue
{
    private $messageQueue;

    /**
     * MessageQueue constructor.
     * @param string $topic
     * @param string $brokerName
     * @param int $queueId
     */
    public function __construct($topic, $brokerName, $queueId){
        $this->messageQueue = new MQMessageQueue($topic, $brokerName, $queueId);
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
    public function setTopic($topic){
    }

    /**
     * @return string
     */
    public function getBrokerName(){
        return '';
    }

    /**
     * @param string $brokerName
     */
    public function setBrokerName($brokerName){
    }

    /**
     * @return int
     */
    public function getQueueId(){
        return 0;
    }

    /**
     * @param int $queueId
     * @return void
     */
    public function setQueueId($queueId){
    }
}
