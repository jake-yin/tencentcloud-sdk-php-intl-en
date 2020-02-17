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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getResourceId() Obtain Domain name ID.
 * @method void setResourceId(string $ResourceId) Set Domain name ID.
 * @method integer getAppId() Obtain Tencent Cloud account ID.
 * @method void setAppId(integer $AppId) Set Tencent Cloud account ID.
 * @method string getDomain() Obtain CDN acceleration domain name.
 * @method void setDomain(string $Domain) Set CDN acceleration domain name.
 * @method string getCname() Obtain Domain name CNAME.
 * @method void setCname(string $Cname) Set Domain name CNAME.
 * @method string getStatus() Obtain Domain name status. pending: under review; rejected: review failed; processing: review succeeded and under deployment; online: enabled; offline: disabled; deleted: deleted.
 * @method void setStatus(string $Status) Set Domain name status. pending: under review; rejected: review failed; processing: review succeeded and under deployment; online: enabled; offline: disabled; deleted: deleted.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method string getServiceType() Obtain Domain name business type. web: static acceleration; download: download acceleration; media: streaming media acceleration.
 * @method void setServiceType(string $ServiceType) Set Domain name business type. web: static acceleration; download: download acceleration; media: streaming media acceleration.
 * @method string getCreateTime() Obtain Domain name creation time.
 * @method void setCreateTime(string $CreateTime) Set Domain name creation time.
 * @method string getUpdateTime() Obtain Domain name update time.
 * @method void setUpdateTime(string $UpdateTime) Set Domain name update time.
 * @method Origin getOrigin() Obtain Origin server configuration details.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration details.
 * @method string getDisable() Obtain Domain name block status, including normal, overdue, quota, malicious, ddos, idle, unlicensed, capping, and readonly.
 * @method void setDisable(string $Disable) Set Domain name block status, including normal, overdue, quota, malicious, ddos, idle, unlicensed, capping, and readonly.
 * @method string getArea() Obtain Acceleration region, including mainland, overseas, and global.
 * @method void setArea(string $Area) Set Acceleration region, including mainland, overseas, and global.
 * @method string getReadonly() Obtain Domain name lock status. normal: not locked; mainland: locked in mainland China; overseas: locked outside mainland China; global: locked globally.
 * @method void setReadonly(string $Readonly) Set Domain name lock status. normal: not locked; mainland: locked in mainland China; overseas: locked outside mainland China; global: locked globally.
 */

/**
 *The concise CDN domain name information
 */
class BriefDomain extends AbstractModel
{
    /**
     * @var string Domain name ID.
     */
    public $ResourceId;

    /**
     * @var integer Tencent Cloud account ID.
     */
    public $AppId;

    /**
     * @var string CDN acceleration domain name.
     */
    public $Domain;

    /**
     * @var string Domain name CNAME.
     */
    public $Cname;

    /**
     * @var string Domain name status. pending: under review; rejected: review failed; processing: review succeeded and under deployment; online: enabled; offline: disabled; deleted: deleted.
     */
    public $Status;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var string Domain name business type. web: static acceleration; download: download acceleration; media: streaming media acceleration.
     */
    public $ServiceType;

    /**
     * @var string Domain name creation time.
     */
    public $CreateTime;

    /**
     * @var string Domain name update time.
     */
    public $UpdateTime;

    /**
     * @var Origin Origin server configuration details.
     */
    public $Origin;

    /**
     * @var string Domain name block status, including normal, overdue, quota, malicious, ddos, idle, unlicensed, capping, and readonly.
     */
    public $Disable;

    /**
     * @var string Acceleration region, including mainland, overseas, and global.
     */
    public $Area;

    /**
     * @var string Domain name lock status. normal: not locked; mainland: locked in mainland China; overseas: locked outside mainland China; global: locked globally.
     */
    public $Readonly;
    /**
     * @param string $ResourceId Domain name ID.
     * @param integer $AppId Tencent Cloud account ID.
     * @param string $Domain CDN acceleration domain name.
     * @param string $Cname Domain name CNAME.
     * @param string $Status Domain name status. pending: under review; rejected: review failed; processing: review succeeded and under deployment; online: enabled; offline: disabled; deleted: deleted.
     * @param integer $ProjectId Project ID.
     * @param string $ServiceType Domain name business type. web: static acceleration; download: download acceleration; media: streaming media acceleration.
     * @param string $CreateTime Domain name creation time.
     * @param string $UpdateTime Domain name update time.
     * @param Origin $Origin Origin server configuration details.
     * @param string $Disable Domain name block status, including normal, overdue, quota, malicious, ddos, idle, unlicensed, capping, and readonly.
     * @param string $Area Acceleration region, including mainland, overseas, and global.
     * @param string $Readonly Domain name lock status. normal: not locked; mainland: locked in mainland China; overseas: locked outside mainland China; global: locked globally.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Readonly",$param) and $param["Readonly"] !== null) {
            $this->Readonly = $param["Readonly"];
        }
    }
}
