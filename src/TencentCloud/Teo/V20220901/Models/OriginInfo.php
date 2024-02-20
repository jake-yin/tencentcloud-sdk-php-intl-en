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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the origin.
 *
 * @method string getOriginType() Obtain Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or domain type origin server;</li>
<li>COS: Tencent Cloud Object Storage origin server;</li>
<li>AWS_S3: AWS S3 Cloud Object Storage origin server;</li>
<li>ORIGIN_GROUP: Origin group type origin server;</li>
<li>VODEO: Video on Demand (hybrid cloud edition);</li>
<li>SPACE: Origin shield, currently only available to the whitelist;</li>
<li>LB: Cloud Load Balancer, currently only available to the whitelist.</li>
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or domain type origin server;</li>
<li>COS: Tencent Cloud Object Storage origin server;</li>
<li>AWS_S3: AWS S3 Cloud Object Storage origin server;</li>
<li>ORIGIN_GROUP: Origin group type origin server;</li>
<li>VODEO: Video on Demand (hybrid cloud edition);</li>
<li>SPACE: Origin shield, currently only available to the whitelist;</li>
<li>LB: Cloud Load Balancer, currently only available to the whitelist.</li>
 * @method string getOrigin() Obtain Origin server address, varying depending on the value of OriginType:
<li>When OriginType is IP_DOMAIN, specify this parameter with IPv4, IPv6, or domain name;</li>
<li>When OriginType is COS, specify this parameter with the COS bucket access domain name;</li>
<li>When OriginType is AWS_S3, specify this parameter with the S3 bucket access domain name;</li>
<li>When OriginType is ORIGIN_GROUP, specify this parameter with the origin group ID;</li>
<li>When OriginType is VODEO and VodeoDistributionRange is ALL, specify this parameter with "all-buckets-in-vodeo-application"; if VodeoDistributionRange is Bucket, specify this parameter with the corresponding storage bucket domain name;</li>
<li>When OriginType is LB, specify the Cloud Load Balancer instance ID. This feature is currently only available to the whitelist;</li>
<li>When OriginType is SPACE, specify this parameter with the origin shield space ID. This feature is currently only available to the whitelist.</li>
 * @method void setOrigin(string $Origin) Set Origin server address, varying depending on the value of OriginType:
<li>When OriginType is IP_DOMAIN, specify this parameter with IPv4, IPv6, or domain name;</li>
<li>When OriginType is COS, specify this parameter with the COS bucket access domain name;</li>
<li>When OriginType is AWS_S3, specify this parameter with the S3 bucket access domain name;</li>
<li>When OriginType is ORIGIN_GROUP, specify this parameter with the origin group ID;</li>
<li>When OriginType is VODEO and VodeoDistributionRange is ALL, specify this parameter with "all-buckets-in-vodeo-application"; if VodeoDistributionRange is Bucket, specify this parameter with the corresponding storage bucket domain name;</li>
<li>When OriginType is LB, specify the Cloud Load Balancer instance ID. This feature is currently only available to the whitelist;</li>
<li>When OriginType is SPACE, specify this parameter with the origin shield space ID. This feature is currently only available to the whitelist.</li>
 * @method string getBackupOrigin() Obtain The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
 * @method void setBackupOrigin(string $BackupOrigin) Set The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
 * @method string getPrivateAccess() Obtain Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, the default value is off.
 * @method void setPrivateAccess(string $PrivateAccess) Set Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, the default value is off.
 * @method array getPrivateParameters() Obtain Private authentication parameter. This parameter is valid only when PrivateAccess is on.
 * @method void setPrivateParameters(array $PrivateParameters) Set Private authentication parameter. This parameter is valid only when PrivateAccess is on.
 * @method integer getVodeoSubAppId() Obtain VODEO sub-application ID. This parameter is required when OriginType is VODEO.
 * @method void setVodeoSubAppId(integer $VodeoSubAppId) Set VODEO sub-application ID. This parameter is required when OriginType is VODEO.
 * @method string getVodeoDistributionRange() Obtain VODEO distribution range. This parameter is required when OriginType is VODEO. Valid values:
<li>All: All storage buckets under the current application;</li>
<li>Bucket: A specified storage bucket.</li>
 * @method void setVodeoDistributionRange(string $VodeoDistributionRange) Set VODEO distribution range. This parameter is required when OriginType is VODEO. Valid values:
<li>All: All storage buckets under the current application;</li>
<li>Bucket: A specified storage bucket.</li>
 * @method string getVodeoBucketId() Obtain VODEO storage bucket ID. This parameter is required when OriginType is VODEO and VodeoDistributionRange is Bucket.
 * @method void setVodeoBucketId(string $VodeoBucketId) Set VODEO storage bucket ID. This parameter is required when OriginType is VODEO and VodeoDistributionRange is Bucket.
 */
class OriginInfo extends AbstractModel
{
    /**
     * @var string Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or domain type origin server;</li>
<li>COS: Tencent Cloud Object Storage origin server;</li>
<li>AWS_S3: AWS S3 Cloud Object Storage origin server;</li>
<li>ORIGIN_GROUP: Origin group type origin server;</li>
<li>VODEO: Video on Demand (hybrid cloud edition);</li>
<li>SPACE: Origin shield, currently only available to the whitelist;</li>
<li>LB: Cloud Load Balancer, currently only available to the whitelist.</li>
     */
    public $OriginType;

    /**
     * @var string Origin server address, varying depending on the value of OriginType:
<li>When OriginType is IP_DOMAIN, specify this parameter with IPv4, IPv6, or domain name;</li>
<li>When OriginType is COS, specify this parameter with the COS bucket access domain name;</li>
<li>When OriginType is AWS_S3, specify this parameter with the S3 bucket access domain name;</li>
<li>When OriginType is ORIGIN_GROUP, specify this parameter with the origin group ID;</li>
<li>When OriginType is VODEO and VodeoDistributionRange is ALL, specify this parameter with "all-buckets-in-vodeo-application"; if VodeoDistributionRange is Bucket, specify this parameter with the corresponding storage bucket domain name;</li>
<li>When OriginType is LB, specify the Cloud Load Balancer instance ID. This feature is currently only available to the whitelist;</li>
<li>When OriginType is SPACE, specify this parameter with the origin shield space ID. This feature is currently only available to the whitelist.</li>
     */
    public $Origin;

    /**
     * @var string The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
     */
    public $BackupOrigin;

    /**
     * @var string Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, the default value is off.
     */
    public $PrivateAccess;

    /**
     * @var array Private authentication parameter. This parameter is valid only when PrivateAccess is on.
     */
    public $PrivateParameters;

    /**
     * @var integer VODEO sub-application ID. This parameter is required when OriginType is VODEO.
     */
    public $VodeoSubAppId;

    /**
     * @var string VODEO distribution range. This parameter is required when OriginType is VODEO. Valid values:
<li>All: All storage buckets under the current application;</li>
<li>Bucket: A specified storage bucket.</li>
     */
    public $VodeoDistributionRange;

    /**
     * @var string VODEO storage bucket ID. This parameter is required when OriginType is VODEO and VodeoDistributionRange is Bucket.
     */
    public $VodeoBucketId;

    /**
     * @param string $OriginType Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or domain type origin server;</li>
<li>COS: Tencent Cloud Object Storage origin server;</li>
<li>AWS_S3: AWS S3 Cloud Object Storage origin server;</li>
<li>ORIGIN_GROUP: Origin group type origin server;</li>
<li>VODEO: Video on Demand (hybrid cloud edition);</li>
<li>SPACE: Origin shield, currently only available to the whitelist;</li>
<li>LB: Cloud Load Balancer, currently only available to the whitelist.</li>
     * @param string $Origin Origin server address, varying depending on the value of OriginType:
<li>When OriginType is IP_DOMAIN, specify this parameter with IPv4, IPv6, or domain name;</li>
<li>When OriginType is COS, specify this parameter with the COS bucket access domain name;</li>
<li>When OriginType is AWS_S3, specify this parameter with the S3 bucket access domain name;</li>
<li>When OriginType is ORIGIN_GROUP, specify this parameter with the origin group ID;</li>
<li>When OriginType is VODEO and VodeoDistributionRange is ALL, specify this parameter with "all-buckets-in-vodeo-application"; if VodeoDistributionRange is Bucket, specify this parameter with the corresponding storage bucket domain name;</li>
<li>When OriginType is LB, specify the Cloud Load Balancer instance ID. This feature is currently only available to the whitelist;</li>
<li>When OriginType is SPACE, specify this parameter with the origin shield space ID. This feature is currently only available to the whitelist.</li>
     * @param string $BackupOrigin The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
     * @param string $PrivateAccess Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, the default value is off.
     * @param array $PrivateParameters Private authentication parameter. This parameter is valid only when PrivateAccess is on.
     * @param integer $VodeoSubAppId VODEO sub-application ID. This parameter is required when OriginType is VODEO.
     * @param string $VodeoDistributionRange VODEO distribution range. This parameter is required when OriginType is VODEO. Valid values:
<li>All: All storage buckets under the current application;</li>
<li>Bucket: A specified storage bucket.</li>
     * @param string $VodeoBucketId VODEO storage bucket ID. This parameter is required when OriginType is VODEO and VodeoDistributionRange is Bucket.
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
        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("BackupOrigin",$param) and $param["BackupOrigin"] !== null) {
            $this->BackupOrigin = $param["BackupOrigin"];
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = [];
            foreach ($param["PrivateParameters"] as $key => $value){
                $obj = new PrivateParameter();
                $obj->deserialize($value);
                array_push($this->PrivateParameters, $obj);
            }
        }

        if (array_key_exists("VodeoSubAppId",$param) and $param["VodeoSubAppId"] !== null) {
            $this->VodeoSubAppId = $param["VodeoSubAppId"];
        }

        if (array_key_exists("VodeoDistributionRange",$param) and $param["VodeoDistributionRange"] !== null) {
            $this->VodeoDistributionRange = $param["VodeoDistributionRange"];
        }

        if (array_key_exists("VodeoBucketId",$param) and $param["VodeoBucketId"] !== null) {
            $this->VodeoBucketId = $param["VodeoBucketId"];
        }
    }
}
