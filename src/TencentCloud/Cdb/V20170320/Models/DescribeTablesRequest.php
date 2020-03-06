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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method string getDatabase() Obtain Database name.
 * @method void setDatabase(string $Database) Set Database name.
 * @method integer getOffset() Obtain Record offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Record offset. Default value: 0.
 * @method integer getLimit() Obtain Number of results to be returned for a single request. Default value: 20. Maximum value: 2,000.
 * @method void setLimit(integer $Limit) Set Number of results to be returned for a single request. Default value: 20. Maximum value: 2,000.
 * @method string getTableRegexp() Obtain Regular expression for matching table names, which complies with the rules at MySQL's official website
 * @method void setTableRegexp(string $TableRegexp) Set Regular expression for matching table names, which complies with the rules at MySQL's official website
 */

/**
 *DescribeTables request structure.
 */
class DescribeTablesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var string Database name.
     */
    public $Database;

    /**
     * @var integer Record offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned for a single request. Default value: 20. Maximum value: 2,000.
     */
    public $Limit;

    /**
     * @var string Regular expression for matching table names, which complies with the rules at MySQL's official website
     */
    public $TableRegexp;
    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param string $Database Database name.
     * @param integer $Offset Record offset. Default value: 0.
     * @param integer $Limit Number of results to be returned for a single request. Default value: 20. Maximum value: 2,000.
     * @param string $TableRegexp Regular expression for matching table names, which complies with the rules at MySQL's official website
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TableRegexp",$param) and $param["TableRegexp"] !== null) {
            $this->TableRegexp = $param["TableRegexp"];
        }
    }
}
