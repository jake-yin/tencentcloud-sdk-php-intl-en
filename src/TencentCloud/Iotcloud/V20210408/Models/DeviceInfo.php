<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Device details
 *
 * @method string getDeviceName() Obtain Device name
 * @method void setDeviceName(string $DeviceName) Set Device name
 * @method integer getOnline() Obtain Whether the device is online. `0`: offline; `1`: online
 * @method void setOnline(integer $Online) Set Whether the device is online. `0`: offline; `1`: online
 * @method integer getLoginTime() Obtain Device login time
 * @method void setLoginTime(integer $LoginTime) Set Device login time
 * @method string getVersion() Obtain Device version
 * @method void setVersion(string $Version) Set Device version
 * @method string getDeviceCert() Obtain Device certificate, which is returned for devices that use certificates for authentication
 * @method void setDeviceCert(string $DeviceCert) Set Device certificate, which is returned for devices that use certificates for authentication
 * @method string getDevicePsk() Obtain Device key, which is returned for devices that use keys for authentication
 * @method void setDevicePsk(string $DevicePsk) Set Device key, which is returned for devices that use keys for authentication
 * @method array getTags() Obtain Device attribute
 * @method void setTags(array $Tags) Set Device attribute
 * @method integer getDeviceType() Obtain Device type
 * @method void setDeviceType(integer $DeviceType) Set Device type
 * @method string getImei() Obtain International Mobile Equipment Identity (IMEI)
 * @method void setImei(string $Imei) Set International Mobile Equipment Identity (IMEI)
 * @method integer getIsp() Obtain ISP
 * @method void setIsp(integer $Isp) Set ISP
 * @method string getNbiotDeviceID() Obtain Device ID at the NB-IoT ISP
 * @method void setNbiotDeviceID(string $NbiotDeviceID) Set Device ID at the NB-IoT ISP
 * @method integer getConnIP() Obtain IP address
 * @method void setConnIP(integer $ConnIP) Set IP address
 * @method integer getLastUpdateTime() Obtain Last updated time of the device
 * @method void setLastUpdateTime(integer $LastUpdateTime) Set Last updated time of the device
 * @method string getLoraDevEui() Obtain DevEUI of a LoRa device
 * @method void setLoraDevEui(string $LoraDevEui) Set DevEUI of a LoRa device
 * @method integer getLoraMoteType() Obtain MoteType of a LoRa device
 * @method void setLoraMoteType(integer $LoraMoteType) Set MoteType of a LoRa device
 * @method integer getFirstOnlineTime() Obtain The first time when the device went online
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setFirstOnlineTime(integer $FirstOnlineTime) Set The first time when the device went online
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getLastOfflineTime() Obtain The last time when the device went offline
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLastOfflineTime(integer $LastOfflineTime) Set The last time when the device went offline
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getCreateTime() Obtain Device creation time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setCreateTime(integer $CreateTime) Set Device creation time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getLogLevel() Obtain Device log level
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLogLevel(integer $LogLevel) Set Device log level
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getCertState() Obtain Whether the device certificate has been obtained. `0`: no; `1`: yes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setCertState(integer $CertState) Set Whether the device certificate has been obtained. `0`: no; `1`: yes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getEnableState() Obtain Whether the device is enabled. `0`: disabled; `1`: enabled
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setEnableState(integer $EnableState) Set Whether the device is enabled. `0`: disabled; `1`: enabled
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getLabels() Obtain Device tags
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setLabels(array $Labels) Set Device tags
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getClientIP() Obtain IP address of the MQTT client
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setClientIP(string $ClientIP) Set IP address of the MQTT client
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getFirmwareUpdateTime() Obtain Time of last OTA update
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setFirmwareUpdateTime(integer $FirmwareUpdateTime) Set Time of last OTA update
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class DeviceInfo extends AbstractModel
{
    /**
     * @var string Device name
     */
    public $DeviceName;

    /**
     * @var integer Whether the device is online. `0`: offline; `1`: online
     */
    public $Online;

    /**
     * @var integer Device login time
     */
    public $LoginTime;

    /**
     * @var string Device version
     */
    public $Version;

    /**
     * @var string Device certificate, which is returned for devices that use certificates for authentication
     */
    public $DeviceCert;

    /**
     * @var string Device key, which is returned for devices that use keys for authentication
     */
    public $DevicePsk;

    /**
     * @var array Device attribute
     */
    public $Tags;

    /**
     * @var integer Device type
     */
    public $DeviceType;

    /**
     * @var string International Mobile Equipment Identity (IMEI)
     */
    public $Imei;

    /**
     * @var integer ISP
     */
    public $Isp;

    /**
     * @var string Device ID at the NB-IoT ISP
     */
    public $NbiotDeviceID;

    /**
     * @var integer IP address
     */
    public $ConnIP;

    /**
     * @var integer Last updated time of the device
     */
    public $LastUpdateTime;

    /**
     * @var string DevEUI of a LoRa device
     */
    public $LoraDevEui;

    /**
     * @var integer MoteType of a LoRa device
     */
    public $LoraMoteType;

    /**
     * @var integer The first time when the device went online
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $FirstOnlineTime;

    /**
     * @var integer The last time when the device went offline
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $LastOfflineTime;

    /**
     * @var integer Device creation time
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $CreateTime;

    /**
     * @var integer Device log level
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $LogLevel;

    /**
     * @var integer Whether the device certificate has been obtained. `0`: no; `1`: yes
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $CertState;

    /**
     * @var integer Whether the device is enabled. `0`: disabled; `1`: enabled
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $EnableState;

    /**
     * @var array Device tags
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Labels;

    /**
     * @var string IP address of the MQTT client
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $ClientIP;

    /**
     * @var integer Time of last OTA update
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $FirmwareUpdateTime;

    /**
     * @param string $DeviceName Device name
     * @param integer $Online Whether the device is online. `0`: offline; `1`: online
     * @param integer $LoginTime Device login time
     * @param string $Version Device version
     * @param string $DeviceCert Device certificate, which is returned for devices that use certificates for authentication
     * @param string $DevicePsk Device key, which is returned for devices that use keys for authentication
     * @param array $Tags Device attribute
     * @param integer $DeviceType Device type
     * @param string $Imei International Mobile Equipment Identity (IMEI)
     * @param integer $Isp ISP
     * @param string $NbiotDeviceID Device ID at the NB-IoT ISP
     * @param integer $ConnIP IP address
     * @param integer $LastUpdateTime Last updated time of the device
     * @param string $LoraDevEui DevEUI of a LoRa device
     * @param integer $LoraMoteType MoteType of a LoRa device
     * @param integer $FirstOnlineTime The first time when the device went online
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $LastOfflineTime The last time when the device went offline
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $CreateTime Device creation time
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $LogLevel Device log level
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $CertState Whether the device certificate has been obtained. `0`: no; `1`: yes
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $EnableState Whether the device is enabled. `0`: disabled; `1`: enabled
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $Labels Device tags
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $ClientIP IP address of the MQTT client
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $FirmwareUpdateTime Time of last OTA update
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("DeviceCert",$param) and $param["DeviceCert"] !== null) {
            $this->DeviceCert = $param["DeviceCert"];
        }

        if (array_key_exists("DevicePsk",$param) and $param["DevicePsk"] !== null) {
            $this->DevicePsk = $param["DevicePsk"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new DeviceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("NbiotDeviceID",$param) and $param["NbiotDeviceID"] !== null) {
            $this->NbiotDeviceID = $param["NbiotDeviceID"];
        }

        if (array_key_exists("ConnIP",$param) and $param["ConnIP"] !== null) {
            $this->ConnIP = $param["ConnIP"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("LoraDevEui",$param) and $param["LoraDevEui"] !== null) {
            $this->LoraDevEui = $param["LoraDevEui"];
        }

        if (array_key_exists("LoraMoteType",$param) and $param["LoraMoteType"] !== null) {
            $this->LoraMoteType = $param["LoraMoteType"];
        }

        if (array_key_exists("FirstOnlineTime",$param) and $param["FirstOnlineTime"] !== null) {
            $this->FirstOnlineTime = $param["FirstOnlineTime"];
        }

        if (array_key_exists("LastOfflineTime",$param) and $param["LastOfflineTime"] !== null) {
            $this->LastOfflineTime = $param["LastOfflineTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("CertState",$param) and $param["CertState"] !== null) {
            $this->CertState = $param["CertState"];
        }

        if (array_key_exists("EnableState",$param) and $param["EnableState"] !== null) {
            $this->EnableState = $param["EnableState"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new DeviceLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("FirmwareUpdateTime",$param) and $param["FirmwareUpdateTime"] !== null) {
            $this->FirmwareUpdateTime = $param["FirmwareUpdateTime"];
        }
    }
}
