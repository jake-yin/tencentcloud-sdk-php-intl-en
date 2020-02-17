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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getNodeRole() Obtain Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
 * @method void setNodeRole(string $NodeRole) Set Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
 * @method ExistedInstancesPara getExistedInstancesPara() Obtain Reinstallation parameter of existing instances
 * @method void setExistedInstancesPara(ExistedInstancesPara $ExistedInstancesPara) Set Reinstallation parameter of existing instances
 */

/**
 *Configuration parameters of existing nodes in different roles
 */
class ExistedInstancesForNode extends AbstractModel
{
    /**
     * @var string Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
     */
    public $NodeRole;

    /**
     * @var ExistedInstancesPara Reinstallation parameter of existing instances
     */
    public $ExistedInstancesPara;
    /**
     * @param string $NodeRole Node role. Values: MASTER_ETCD, WORKER. You only need to specify MASTER_ETCD when creating a self-deployed cluster (INDEPENDENT_CLUSTER).
     * @param ExistedInstancesPara $ExistedInstancesPara Reinstallation parameter of existing instances
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
        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("ExistedInstancesPara",$param) and $param["ExistedInstancesPara"] !== null) {
            $this->ExistedInstancesPara = new ExistedInstancesPara();
            $this->ExistedInstancesPara->deserialize($param["ExistedInstancesPara"]);
        }
    }
}
