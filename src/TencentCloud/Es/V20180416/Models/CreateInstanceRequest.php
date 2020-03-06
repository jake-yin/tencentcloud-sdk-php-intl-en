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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getZone() Obtain Availability Zone
 * @method void setZone(string $Zone) Set Availability Zone
 * @method string getEsVersion() Obtain Instance version ("5.6.4" or "6.4.3")
 * @method void setEsVersion(string $EsVersion) Set Instance version ("5.6.4" or "6.4.3")
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getPassword() Obtain Access password, which must contain 8 to 16 characters, and include at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
 * @method void setPassword(string $Password) Set Access password, which must contain 8 to 16 characters, and include at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
 * @method string getInstanceName() Obtain Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
 * @method void setInstanceName(string $InstanceName) Set Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
 * @method integer getNodeNum() Obtain Number of nodes (2-50)
 * @method void setNodeNum(integer $NodeNum) Set Number of nodes (2-50)
 * @method string getChargeType() Obtain Billing mode <li>POSTPAID_BY_HOUR: Pay-as-you-go hourly </li>Default value: POSTPAID_BY_HOUR
 * @method void setChargeType(string $ChargeType) Set Billing mode <li>POSTPAID_BY_HOUR: Pay-as-you-go hourly </li>Default value: POSTPAID_BY_HOUR
 * @method integer getChargePeriod() Obtain This parameter is not used on the global website
 * @method void setChargePeriod(integer $ChargePeriod) Set This parameter is not used on the global website
 * @method string getRenewFlag() Obtain This parameter is not used on the global website
 * @method void setRenewFlag(string $RenewFlag) Set This parameter is not used on the global website
 * @method string getNodeType() Obtain Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
 * @method void setNodeType(string $NodeType) Set Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
 * @method string getDiskType() Obtain Node disk type <li>CLOUD_SSD: SSD cloud disk </li><li>CLOUD_PREMIUM: Premium cloud disk </li>Default value: CLOUD_SSD
 * @method void setDiskType(string $DiskType) Set Node disk type <li>CLOUD_SSD: SSD cloud disk </li><li>CLOUD_PREMIUM: Premium cloud disk </li>Default value: CLOUD_SSD
 * @method integer getDiskSize() Obtain Node disk size in GB
 * @method void setDiskSize(integer $DiskSize) Set Node disk size in GB
 * @method string getTimeUnit() Obtain This parameter is not used on the global website
 * @method void setTimeUnit(string $TimeUnit) Set This parameter is not used on the global website
 * @method integer getAutoVoucher() Obtain Whether to automatically use vouchers <li>0: No </li><li>1: Yes </li>Default value: 0
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use vouchers <li>0: No </li><li>1: Yes </li>Default value: 0
 * @method array getVoucherIds() Obtain List of voucher IDs (only one voucher can be specified at a time currently)
 * @method void setVoucherIds(array $VoucherIds) Set List of voucher IDs (only one voucher can be specified at a time currently)
 * @method boolean getEnableDedicatedMaster() Obtain Whether to create a dedicated master node <li>true: Yes </li><li>false: No </li>Default value: false
 * @method void setEnableDedicatedMaster(boolean $EnableDedicatedMaster) Set Whether to create a dedicated master node <li>true: Yes </li><li>false: No </li>Default value: false
 * @method integer getMasterNodeNum() Obtain Number of dedicated master nodes (only 3 and 5 are supported. This value must be passed in if `EnableDedicatedMaster` is true)
 * @method void setMasterNodeNum(integer $MasterNodeNum) Set Number of dedicated master nodes (only 3 and 5 are supported. This value must be passed in if `EnableDedicatedMaster` is true)
 * @method string getMasterNodeType() Obtain Dedicated master node type, which must be passed in if `EnableDedicatedMaster` is true <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
 * @method void setMasterNodeType(string $MasterNodeType) Set Dedicated master node type, which must be passed in if `EnableDedicatedMaster` is true <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
 * @method integer getMasterNodeDiskSize() Obtain Dedicated master node disk size in GB, which is optional. If passed in, it can only be 50 and cannot be customized currently
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) Set Dedicated master node disk size in GB, which is optional. If passed in, it can only be 50 and cannot be customized currently
 * @method string getClusterNameInConf() Obtain ClusterName in the cluster configuration file, which is the instance ID by default and currently cannot be customized
 * @method void setClusterNameInConf(string $ClusterNameInConf) Set ClusterName in the cluster configuration file, which is the instance ID by default and currently cannot be customized
 * @method integer getDeployMode() Obtain Cluster deployment mode <li>0: single-AZ deployment </li><li>1: multi-AZ deployment </li>Default value: 0
 * @method void setDeployMode(integer $DeployMode) Set Cluster deployment mode <li>0: single-AZ deployment </li><li>1: multi-AZ deployment </li>Default value: 0
 * @method array getMultiZoneInfo() Obtain Details of AZs in multi-AZ deployment mode (which is required when DeployMode is 1)
 * @method void setMultiZoneInfo(array $MultiZoneInfo) Set Details of AZs in multi-AZ deployment mode (which is required when DeployMode is 1)
 * @method string getLicenseType() Obtain License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
 * @method void setLicenseType(string $LicenseType) Set License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
 * @method array getNodeInfoList() Obtain 
 * @method void setNodeInfoList(array $NodeInfoList) Set 
 * @method array getTagList() Obtain 
 * @method void setTagList(array $TagList) Set 
 * @method integer getBasicSecurityType() Obtain 
 * @method void setBasicSecurityType(integer $BasicSecurityType) Set 
 */

/**
 *CreateInstance request structure.
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string Availability Zone
     */
    public $Zone;

    /**
     * @var string Instance version ("5.6.4" or "6.4.3")
     */
    public $EsVersion;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Access password, which must contain 8 to 16 characters, and include at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
     */
    public $Password;

    /**
     * @var string Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
     */
    public $InstanceName;

    /**
     * @var integer Number of nodes (2-50)
     */
    public $NodeNum;

    /**
     * @var string Billing mode <li>POSTPAID_BY_HOUR: Pay-as-you-go hourly </li>Default value: POSTPAID_BY_HOUR
     */
    public $ChargeType;

    /**
     * @var integer This parameter is not used on the global website
     */
    public $ChargePeriod;

    /**
     * @var string This parameter is not used on the global website
     */
    public $RenewFlag;

    /**
     * @var string Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
     */
    public $NodeType;

    /**
     * @var string Node disk type <li>CLOUD_SSD: SSD cloud disk </li><li>CLOUD_PREMIUM: Premium cloud disk </li>Default value: CLOUD_SSD
     */
    public $DiskType;

    /**
     * @var integer Node disk size in GB
     */
    public $DiskSize;

    /**
     * @var string This parameter is not used on the global website
     */
    public $TimeUnit;

    /**
     * @var integer Whether to automatically use vouchers <li>0: No </li><li>1: Yes </li>Default value: 0
     */
    public $AutoVoucher;

    /**
     * @var array List of voucher IDs (only one voucher can be specified at a time currently)
     */
    public $VoucherIds;

    /**
     * @var boolean Whether to create a dedicated master node <li>true: Yes </li><li>false: No </li>Default value: false
     */
    public $EnableDedicatedMaster;

    /**
     * @var integer Number of dedicated master nodes (only 3 and 5 are supported. This value must be passed in if `EnableDedicatedMaster` is true)
     */
    public $MasterNodeNum;

    /**
     * @var string Dedicated master node type, which must be passed in if `EnableDedicatedMaster` is true <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
     */
    public $MasterNodeType;

    /**
     * @var integer Dedicated master node disk size in GB, which is optional. If passed in, it can only be 50 and cannot be customized currently
     */
    public $MasterNodeDiskSize;

    /**
     * @var string ClusterName in the cluster configuration file, which is the instance ID by default and currently cannot be customized
     */
    public $ClusterNameInConf;

    /**
     * @var integer Cluster deployment mode <li>0: single-AZ deployment </li><li>1: multi-AZ deployment </li>Default value: 0
     */
    public $DeployMode;

    /**
     * @var array Details of AZs in multi-AZ deployment mode (which is required when DeployMode is 1)
     */
    public $MultiZoneInfo;

    /**
     * @var string License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
     */
    public $LicenseType;

    /**
     * @var array 
     */
    public $NodeInfoList;

    /**
     * @var array 
     */
    public $TagList;

    /**
     * @var integer 
     */
    public $BasicSecurityType;
    /**
     * @param string $Zone Availability Zone
     * @param string $EsVersion Instance version ("5.6.4" or "6.4.3")
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param string $Password Access password, which must contain 8 to 16 characters, and include at least two of the following three types of characters: [a-z,A-Z], [0-9] and [-!@#$%&^*+=_:;,.?]
     * @param string $InstanceName Instance name, which can contain 1 to 50 English letters, Chinese characters, digits, dashes (-), or underscores (_)
     * @param integer $NodeNum Number of nodes (2-50)
     * @param string $ChargeType Billing mode <li>POSTPAID_BY_HOUR: Pay-as-you-go hourly </li>Default value: POSTPAID_BY_HOUR
     * @param integer $ChargePeriod This parameter is not used on the global website
     * @param string $RenewFlag This parameter is not used on the global website
     * @param string $NodeType Node specification <li>ES.S1.SMALL2: 1-core 2 GB </li><li>ES.S1.MEDIUM4: 2-core 4 GB </li><li>ES.S1.MEDIUM8: 2-core 8 GB </li><li>ES.S1.LARGE16: 4-core 16 GB </li><li>ES.S1.2XLARGE32: 8-core 32 GB </li><li>ES.S1.4XLARGE32: 16-core 32 GB </li><li>ES.S1.4XLARGE64: 16-core 64 GB </li>
     * @param string $DiskType Node disk type <li>CLOUD_SSD: SSD cloud disk </li><li>CLOUD_PREMIUM: Premium cloud disk </li>Default value: CLOUD_SSD
     * @param integer $DiskSize Node disk size in GB
     * @param string $TimeUnit This parameter is not used on the global website
     * @param integer $AutoVoucher Whether to automatically use vouchers <li>0: No </li><li>1: Yes </li>Default value: 0
     * @param array $VoucherIds List of voucher IDs (only one voucher can be specified at a time currently)
     * @param boolean $EnableDedicatedMaster Whether to create a dedicated master node <li>true: Yes </li><li>false: No </li>Default value: false
     * @param integer $MasterNodeNum Number of dedicated master nodes (only 3 and 5 are supported. This value must be passed in if `EnableDedicatedMaster` is true)
     * @param string $MasterNodeType Dedicated master node type, which must be passed in if `EnableDedicatedMaster` is true <li>ES.S1.SMALL2: 1-core 2 GB</li><li>ES.S1.MEDIUM4: 2-core 4 GB</li><li>ES.S1.MEDIUM8: 2-core 8 GB</li><li>ES.S1.LARGE16: 4-core 16 GB</li><li>ES.S1.2XLARGE32: 8-core 32 GB</li><li>ES.S1.4XLARGE32: 16-core 32 GB</li><li>ES.S1.4XLARGE64: 16-core 64 GB</li>
     * @param integer $MasterNodeDiskSize Dedicated master node disk size in GB, which is optional. If passed in, it can only be 50 and cannot be customized currently
     * @param string $ClusterNameInConf ClusterName in the cluster configuration file, which is the instance ID by default and currently cannot be customized
     * @param integer $DeployMode Cluster deployment mode <li>0: single-AZ deployment </li><li>1: multi-AZ deployment </li>Default value: 0
     * @param array $MultiZoneInfo Details of AZs in multi-AZ deployment mode (which is required when DeployMode is 1)
     * @param string $LicenseType License type <li>oss: Open Source Edition </li><li>basic: Basic Edition </li><li>platinum: Platinum Edition </li>Default value: Platinum
     * @param array $NodeInfoList 
     * @param array $TagList 
     * @param integer $BasicSecurityType 
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePeriod",$param) and $param["ChargePeriod"] !== null) {
            $this->ChargePeriod = $param["ChargePeriod"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("EnableDedicatedMaster",$param) and $param["EnableDedicatedMaster"] !== null) {
            $this->EnableDedicatedMaster = $param["EnableDedicatedMaster"];
        }

        if (array_key_exists("MasterNodeNum",$param) and $param["MasterNodeNum"] !== null) {
            $this->MasterNodeNum = $param["MasterNodeNum"];
        }

        if (array_key_exists("MasterNodeType",$param) and $param["MasterNodeType"] !== null) {
            $this->MasterNodeType = $param["MasterNodeType"];
        }

        if (array_key_exists("MasterNodeDiskSize",$param) and $param["MasterNodeDiskSize"] !== null) {
            $this->MasterNodeDiskSize = $param["MasterNodeDiskSize"];
        }

        if (array_key_exists("ClusterNameInConf",$param) and $param["ClusterNameInConf"] !== null) {
            $this->ClusterNameInConf = $param["ClusterNameInConf"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }
    }
}
