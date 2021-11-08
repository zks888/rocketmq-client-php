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
 * 消息扩展类
 * Class MessageExt
 * @package RocketMQ
 */
class MessageExt
{
    /**
     * @var MQMessageExt
     */
    private $messageExt;

    public function __construct($messageExt)
    {
        $this->messageExt = $messageExt;
    }

    /**
     * @param int $filterType
     */
    public function parseTopicFilterType(int $filterType){
    }

    /**
     * @return int
     */
    public function getQueueId(){
        return 0;
    }

    /**
     * 记录MessageQueue编号，消息会被发送到Topic下的MessageQueue
     *
     * @param int $queueId
     * @return void
     */
    public function setQueueId(int $queueId){
    }

    /**
     * @return int
     */
    public function getBornTimestamp(){
        return 0;
    }

    /**
     * 消息创建时间，在Producer发送消息时设置
     *
     * @param int $bornTimestamp
     * @return void
     */
    public function setBornTimestamp(int $bornTimestamp){
    }

    /**
     * 记录存储该消息的Broker地址
     *
     * @return string
     */
    public function getStoreHostString(){
        return '';
    }

    /**
     * @return string
     */
    public function getMsgId(){
        return '';
    }

    /**
     * 消息Id
     *
     * @param string $msgId
     * @return void
     */
    public function setMsgId(string $msgId){
    }

    /**
     * @return int
     */
    public function getOffsetMsgId(){
        return 0;
    }

    /**
     *  根据MsgId查询消息
     * @param int $offsetMsgId
     * @return void
     */
    public function setOffsetMsgId(int $offsetMsgId){
    }

    /**
     * @return int
     */
    public function getBodyCRC(){
        return 0;
    }

    /**
     * 消息内容CRC校验值
     *
     * @param int $bodyCRC
     * @return void
     */
    public function setBodyCRC(int $bodyCRC){}

    /**
     * @return int
     */
    public function getQueueOffset(){
        return 0;
    }

    /**
     * 记录在ConsumeQueue中的偏移
     *
     * @param int $queueOffset
     * @return void
     */
    public function setQueueOffset(int $queueOffset){
    }

    /**
     * @return int
     */
    public function getCommitLogOffset(){
        return 0;
    }

    /**
     * 记录在Broker中存储偏移
     *
     * @param int $physicOffset
     * @return void
     */
    public function setCommitLogOffset(int $physicOffset){
    }

    /**
     * @return int
     */
    public function getStoreSize(){
        return 0;
    }

    /**
     * 记录消息在Broker存盘大小
     * @param int $storeSize
     * @return void
     */
    public function setStoreSize(int $storeSize){
    }

    /**
     * 消息重试消费次数
     */
    public function getReconsumeTimes(){
        return 0;
    }

    /**
     * @return int
     */
    public function getPreparedTransactionOffset(){
        return 0;
    }

    /**
     * 事务详细相关字段
     * @param int $preparedTransactionOffset
     * @return void
     */
    public function setPreparedTransactionOffset(int $preparedTransactionOffset){
    }

    /**
     * @return string
     */
    public function toString(){
        return '';
    }

    /**
     * 获取message消息对象
     *
     * @return Message
     */
    public function getMessage(){
        return new Message('', '', '', '');
    }
}
