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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() Obtain Instance name.
 * @method void setInstanceId(string $InstanceId) Set Instance name.
 * @method string getDbName() Obtain Database name.
 * @method void setDbName(string $DbName) Set Database name.
 * @method string getTable() Obtain Table name.
 * @method void setTable(string $Table) Set Table name.
 * @method array getCols() Obtain Column information.
 * @method void setCols(array $Cols) Set Column information.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeDatabaseTable response structure.
 */
class DescribeDatabaseTableResponse extends AbstractModel
{
    /**
     * @var string Instance name.
     */
    public $InstanceId;

    /**
     * @var string Database name.
     */
    public $DbName;

    /**
     * @var string Table name.
     */
    public $Table;

    /**
     * @var array Column information.
     */
    public $Cols;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $InstanceId Instance name.
     * @param string $DbName Database name.
     * @param string $Table Table name.
     * @param array $Cols Column information.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Cols",$param) and $param["Cols"] !== null) {
            $this->Cols = [];
            foreach ($param["Cols"] as $key => $value){
                $obj = new TableColumn();
                $obj->deserialize($value);
                array_push($this->Cols, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
