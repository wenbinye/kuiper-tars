<?php

declare(strict_types=1);

/**
 * NOTE: This class is auto generated by Tars Generator (https://github.com/wenbinye/tars-generator).
 *
 * Do not edit the class manually.
 * Tars Generator version: 1.0
 */

namespace kuiper\tars\integration;

use kuiper\tars\annotation\TarsClient;
use kuiper\tars\annotation\TarsParameter;
use kuiper\tars\annotation\TarsReturnType;

/**
 * @TarsClient("tars.tarsstat.StatObj")
 */
interface StatFServant
{
    /**
     * 上报模块间调用信息 Mic = module interval call.
     *
     * @tars-param statmsg,             上报信息
     * @tars-param bFromServer,         上报源  bFromClient: true 客户端发起的上报 false 服务端发起上报
     * @tars-return int,                返回0表示成功
     *
     * @TarsParameter(name="msg", type="map<StatMicMsgHead,StatMicMsgBody>")
     * @TarsParameter(name="bFromClient", type="bool")
     * @TarsReturnType("int")
     *
     * @param \kuiper\tars\type\StructMap $msg
     * @param bool                        $bFromClient
     *
     * @return int
     */
    public function reportMicMsg($msg, bool $bFromClient): int;

    /**
     * 上报模块间调用采样信息 Mic = module interval call.
     *
     * @tars-param msg,               上报信息
     * @tars-return int,                返回0表示成功
     *
     * @TarsParameter(name="msg", type="vector<StatSampleMsg>")
     * @TarsReturnType("int")
     *
     * @param StatSampleMsg[] $msg
     *
     * @return int
     */
    public function reportSampleMsg(array $msg): int;
}