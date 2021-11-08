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
 * 消息生产者
 * Class Producer
 * @package RocketMQ
 */
class Producer
{
    /**
     * @var DefaultMQProducer
     */
    private $producer;

    /**
     * Producer constructor.
     *
     * @param string $producerGroup
     * @return void
     */
    public function __construct(string $producerGroup){
    }

    /**
     * 设置实例名
     *
     * @param string $instanceName  实例名
     * @return void
     */
    public function setInstanceName(string $instanceName){
    }

    /**
     * 获取实例名
     *
     * @return string
     */
    public function getInstanceName(){
        return "";
    }

    /**
     * 设置分组名
     *
     * @param string $groupName
     * @return void
     */
    public function setGroupName(string $groupName){
    }

    /**
     * 获取分组名称
     *
     * @return string
     */
    public function getGroupName(){
        return "";
    }

    /**
     * 获取名字服务链接地址
     *
     * @return string
     */
    public function getNamesrvAddr(){
        return "";
    }

    /**
     * 设置名字服务链接地址
     *
     * @param string $nameserver
     * @return void
     */
    public function setNamesrvAddr(string $nameserver){}

    /**
     * 启动
     *
     * @return void
     */
    public function start(){}

    /**
     * 发送消息
     *
     * @param Message $message 消息对象
     * @param MessageQueue $queue
     * @return SendResult
     */
    public function send(Message $message, $queue = null){
        return new SendResult;
    }

    /**
     * @return string
     */
    public function getMQClientId(){
        return '';
    }

    /**
     * @param string $topic
     * @return array
     */
    public function getTopicMessageQueueInfo($topic){
        return [];
    }

    /**
     * 阿里云商用版本需要使用这个方法链接，开源版本不需要管
     */
    public function getSessionCredentials(){
    }

    /**
     * 阿里云商用版本需要使用这个方法链接，开源版本不需要管
     *
     * @param string $accessKey
     * @param string $secretKey
     * @param string $autChannel
     * @return void
     */
    public function setSessionCredentials(string $accessKey, string $secretKey, string $autChannel){
    }

    /**
     * 设置获取名字服务配置的http接口
     * 比如http://nameserver.abc.com/get/nameserver 这个接口返回值是127.0.0.1:9876则程序会
     * 自动链接到该地址，不需要显示的设置,便于更新
     *
     * @param string $nameserver
     * @return void
     */
    public function setNamesrvDomain($nameserver){
    }

    /**
     * 设置发送失败重试次数
     *
     * @param int $retryTimes 重试次数,默认重试5次
     * @return void
     */
    public function setRetryTimes(int $retryTimes){
    }

    /**
     * 获取发送失败重试次数
     *
     * @return int
     */
    public function getRetryTimes(){
        return 0;
    }

    /**
     * 获取发送消息超时时间
     *
     * @return int
     */
    public function getSendMsgTimeout(){
        return 0;
    }

    /**
     * 发送消息超时时间
     * @param int $sendMsgTimeout 单位是毫秒,默认3000毫秒
     */
    public function setSendMsgTimeout($sendMsgTimeout){
    }

    /**
     * 获取消息最大限制
     *
     * @return int
     */
    public function  getCompressMsgBodyOverHowmuch(){
        return 0;
    }

    /**
     * 设置消息最大限制
     * @param int $compressMsgBodyOverHowmuch //最大限制 单位是Bit,默认是4MB
     */
    public function setCompressMsgBodyOverHowmuch($compressMsgBodyOverHowmuch){
    }

    /**
     * 获取 消息压缩等级 level = [-1, 9] 默认是5
     *
     * @return int
     */
    public function getCompressLevel(){
        return 0;
    }

    /**
     * 设置消息压缩等级   level = [-1, 9]
     * @param int $compressLevel //默认是5
     */
    public function setCompressLevel($compressLevel){
    }

    /**
     * 获取消息长度最大限制
     *
     * @return int
     */
    public function getMaxMessageSize(){
        return 0;
    }

    /**
     * 设置消息长度最大限制
     * @param int $messageSize
     */
    public function setMaxMessageSize($messageSize){}

    /**
     * 设置传出链接线程数 默认是cpu core的数值
     * @param int $num //default = cpu core.
     */
    public function setTcpTransportPullThreadNum(int $num){
    }

    /**
     * 获取传出链接线程数 默认是cpu core的数值
     *
     * @return int
     */
    public function getTcpTransportPullThreadNum(){
        return 0;
    }

    /**
     * 设置tcp链接超时时间
     * @param int $timeout //单位是毫秒 default = 3000 ms
     */
    public function setTcpTransportConnectTimeout(int $timeout){
    }

    /**
     * 获取tcp链接超时时间
     */
    public function getTcpTransportConnectTimeout(){
        return 0;
    }

    /**
     * 设置申请锁超时时间
     * @param int $timeout //单位是毫秒,默认3000ms
     */
    public function setTcpTransportTryLockTimeout(int $timeout){
    }

    /**
     * 获取申请锁超时时间
     *
     * @return int
     */
    public function getTcpTransportTryLockTimeout(){
        return 0;
    }

    /**
     * 同一个实例链接多套rocketmq的时候需要传入，可以区别生成clientId
     * @param string $unitName
     */
    public function setUnitName(string $unitName){
    }

    /**
     * @return string
     */
    public function getUnitName(){
        return '';
    }

    /**
     * 设置日志等级
     * @param int $inputLevel
     */
    public function setLogLevel(int $inputLevel){}

    /**
     * 获取日志等级
     *
     * @return int
     */
    public function getLogLevel(){
        return 0;
    }

    /**
     * 设置日志生成规则
     * @param $fileNum //保留日志数目
     * @param $perFileSize //每个日志多大
     */
    public function setLogFileSizeAndNum($fileNum, $perFileSize){
    }

    /**
     *
     * @return string
     */
    public function getNameSpace(){
        return '';
    }

    /**
     * @param string $nameSpace
     */
    public function setNameSpace(string $nameSpace){
    }

    /**
     *
     * @return string
     */
    public function version(){
        return '';
    }

    /**
     * @return int
     */
    public function getRetryTimes4Async(){
        return 0;
    }

    /**
     * @param int $times
     */
    public function setRetryTimes4Async(int $times){}

    /**
     * @return bool
     */
    public function getMessageTrace(){
        return true;
    }

    /**
     * @param bool $messageTrace
     */
    public function setMessageTrace(bool $messageTrace){
    }
}
