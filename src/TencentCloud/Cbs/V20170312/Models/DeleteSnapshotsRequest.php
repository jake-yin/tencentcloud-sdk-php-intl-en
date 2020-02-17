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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getSnapshotIds() Obtain List of IDs of snapshots to be deleted, which can be queried via [DescribeSnapshots](/document/product/362/15647).
 * @method void setSnapshotIds(array $SnapshotIds) Set List of IDs of snapshots to be deleted, which can be queried via [DescribeSnapshots](/document/product/362/15647).
 */

/**
 *DeleteSnapshots request structure.
 */
class DeleteSnapshotsRequest extends AbstractModel
{
    /**
     * @var array List of IDs of snapshots to be deleted, which can be queried via [DescribeSnapshots](/document/product/362/15647).
     */
    public $SnapshotIds;
    /**
     * @param array $SnapshotIds List of IDs of snapshots to be deleted, which can be queried via [DescribeSnapshots](/document/product/362/15647).
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
        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }
    }
}
