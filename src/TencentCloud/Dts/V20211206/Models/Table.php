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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Synced table description
 *
 * @method string getTableName() Obtain Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNewTableName() Obtain New table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewTableName(string $NewTableName) Set New table name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFilterCondition() Obtain Filter condition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFilterCondition(string $FilterCondition) Set Filter condition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColumnMode() Obtain Whether to synchronize all columns in the table. All: all columns under the current table; Partial (the corresponding field ColumnMode in ModifySyncJobConfig interface does not support Partial at the moment): some columns under the current table, detailed table information is provided by filling the Columns field.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumnMode(string $ColumnMode) Set Whether to synchronize all columns in the table. All: all columns under the current table; Partial (the corresponding field ColumnMode in ModifySyncJobConfig interface does not support Partial at the moment): some columns under the current table, detailed table information is provided by filling the Columns field.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getColumns() Obtain Column information in data sync. This field is required when ColumnMode is set to Partial.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumns(array $Columns) Set Column information in data sync. This field is required when ColumnMode is set to Partial.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTmpTables() Obtain The temp tables to be synced. This parameter is mutually exclusive with `NewTableName`. It is valid only when the configured sync objects are table-level ones and `TableEditMode` is `pt`. To sync temp tables generated when pt-osc or other tools are used during the sync process, you must configure this parameter first. For example, if you want to perform the pt-osc operation on a table named "t1", configure this parameter as ["\_t1\_new","\_t1\_old"]; to perform the gh-ost operation on t1, configure it as ["\_t1\_ghc","\_t1\_gho","\_t1\_del"]. Temp tables generated by pt-osc and gh-ost operations can be configured at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTmpTables(array $TmpTables) Set The temp tables to be synced. This parameter is mutually exclusive with `NewTableName`. It is valid only when the configured sync objects are table-level ones and `TableEditMode` is `pt`. To sync temp tables generated when pt-osc or other tools are used during the sync process, you must configure this parameter first. For example, if you want to perform the pt-osc operation on a table named "t1", configure this parameter as ["\_t1\_new","\_t1\_old"]; to perform the gh-ost operation on t1, configure it as ["\_t1\_ghc","\_t1\_gho","\_t1\_del"]. Temp tables generated by pt-osc and gh-ost operations can be configured at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableEditMode() Obtain Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableEditMode(string $TableEditMode) Set Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Table extends AbstractModel
{
    /**
     * @var string Table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string New table name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewTableName;

    /**
     * @var string Filter condition
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FilterCondition;

    /**
     * @var string Whether to synchronize all columns in the table. All: all columns under the current table; Partial (the corresponding field ColumnMode in ModifySyncJobConfig interface does not support Partial at the moment): some columns under the current table, detailed table information is provided by filling the Columns field.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColumnMode;

    /**
     * @var array Column information in data sync. This field is required when ColumnMode is set to Partial.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Columns;

    /**
     * @var array The temp tables to be synced. This parameter is mutually exclusive with `NewTableName`. It is valid only when the configured sync objects are table-level ones and `TableEditMode` is `pt`. To sync temp tables generated when pt-osc or other tools are used during the sync process, you must configure this parameter first. For example, if you want to perform the pt-osc operation on a table named "t1", configure this parameter as ["\_t1\_new","\_t1\_old"]; to perform the gh-ost operation on t1, configure it as ["\_t1\_ghc","\_t1\_gho","\_t1\_del"]. Temp tables generated by pt-osc and gh-ost operations can be configured at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TmpTables;

    /**
     * @var string Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableEditMode;

    /**
     * @param string $TableName Table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NewTableName New table name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FilterCondition Filter condition
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ColumnMode Whether to synchronize all columns in the table. All: all columns under the current table; Partial (the corresponding field ColumnMode in ModifySyncJobConfig interface does not support Partial at the moment): some columns under the current table, detailed table information is provided by filling the Columns field.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Columns Column information in data sync. This field is required when ColumnMode is set to Partial.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TmpTables The temp tables to be synced. This parameter is mutually exclusive with `NewTableName`. It is valid only when the configured sync objects are table-level ones and `TableEditMode` is `pt`. To sync temp tables generated when pt-osc or other tools are used during the sync process, you must configure this parameter first. For example, if you want to perform the pt-osc operation on a table named "t1", configure this parameter as ["\_t1\_new","\_t1\_old"]; to perform the gh-ost operation on t1, configure it as ["\_t1\_ghc","\_t1\_gho","\_t1\_del"]. Temp tables generated by pt-osc and gh-ost operations can be configured at the same time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableEditMode Table editing type. Valid values: `rename` (table mapping); `pt` (additional table sync).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("NewTableName",$param) and $param["NewTableName"] !== null) {
            $this->NewTableName = $param["NewTableName"];
        }

        if (array_key_exists("FilterCondition",$param) and $param["FilterCondition"] !== null) {
            $this->FilterCondition = $param["FilterCondition"];
        }

        if (array_key_exists("ColumnMode",$param) and $param["ColumnMode"] !== null) {
            $this->ColumnMode = $param["ColumnMode"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("TmpTables",$param) and $param["TmpTables"] !== null) {
            $this->TmpTables = $param["TmpTables"];
        }

        if (array_key_exists("TableEditMode",$param) and $param["TableEditMode"] !== null) {
            $this->TableEditMode = $param["TableEditMode"];
        }
    }
}
