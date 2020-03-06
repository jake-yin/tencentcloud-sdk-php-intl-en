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
 * @method array getGlobalPrivileges() Obtain Array of global permissions.
 * @method void setGlobalPrivileges(array $GlobalPrivileges) Set Array of global permissions.
 * @method array getDatabasePrivileges() Obtain Array of database permissions.
 * @method void setDatabasePrivileges(array $DatabasePrivileges) Set Array of database permissions.
 * @method array getTablePrivileges() Obtain Array of table permissions in the database.
 * @method void setTablePrivileges(array $TablePrivileges) Set Array of table permissions in the database.
 * @method array getColumnPrivileges() Obtain Array of column permissions in the table.
 * @method void setColumnPrivileges(array $ColumnPrivileges) Set Array of column permissions in the table.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeAccountPrivileges response structure.
 */
class DescribeAccountPrivilegesResponse extends AbstractModel
{
    /**
     * @var array Array of global permissions.
     */
    public $GlobalPrivileges;

    /**
     * @var array Array of database permissions.
     */
    public $DatabasePrivileges;

    /**
     * @var array Array of table permissions in the database.
     */
    public $TablePrivileges;

    /**
     * @var array Array of column permissions in the table.
     */
    public $ColumnPrivileges;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param array $GlobalPrivileges Array of global permissions.
     * @param array $DatabasePrivileges Array of database permissions.
     * @param array $TablePrivileges Array of table permissions in the database.
     * @param array $ColumnPrivileges Array of column permissions in the table.
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
        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->DatabasePrivileges = [];
            foreach ($param["DatabasePrivileges"] as $key => $value){
                $obj = new DatabasePrivilege();
                $obj->deserialize($value);
                array_push($this->DatabasePrivileges, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new TablePrivilege();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }

        if (array_key_exists("ColumnPrivileges",$param) and $param["ColumnPrivileges"] !== null) {
            $this->ColumnPrivileges = [];
            foreach ($param["ColumnPrivileges"] as $key => $value){
                $obj = new ColumnPrivilege();
                $obj->deserialize($value);
                array_push($this->ColumnPrivileges, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
