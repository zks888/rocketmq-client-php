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


class SendResult{
    /**
     * @return string
     */
    public function getMsgId(){
        return "";
    }

    /**
     * @return string
     */
    public function getOffsetMsgId(){
        return "";
    }

    /**
     * @return int
     */
    public function getSendStatus(){
        return 0;
    }

    /**
     * @return MessageQueue
     */
    public function getMessageQueue(){
        return new MessageQueue;
    }

    /**
     * @return int
     */
    public function getQueueOffset(){
        return 0;
    }

    /**
     * @return string
     */
    public function getRegionId(){
        return "";
    }

    /**
     * @return string
     */
    public function setRegionId(){
        return "";
    }

    /**
     * @return string
     */
    public function getTransactionId(){
        return "";
    }
}
