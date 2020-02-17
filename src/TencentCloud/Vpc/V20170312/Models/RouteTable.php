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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method string getRouteTableId() Obtain The route table instance ID, such as `rtb-azd4dt1c`.
 * @method void setRouteTableId(string $RouteTableId) Set The route table instance ID, such as `rtb-azd4dt1c`.
 * @method string getRouteTableName() Obtain Route table name.
 * @method void setRouteTableName(string $RouteTableName) Set Route table name.
 * @method array getAssociationSet() Obtain The association relationships of the route table.
 * @method void setAssociationSet(array $AssociationSet) Set The association relationships of the route table.
 * @method array getRouteSet() Obtain Route table policy set.
 * @method void setRouteSet(array $RouteSet) Set Route table policy set.
 * @method boolean getMain() Obtain Whether it is the default route table.
 * @method void setMain(boolean $Main) Set Whether it is the default route table.
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 */

/**
 *Route table object
 */
class RouteTable extends AbstractModel
{
    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var string The route table instance ID, such as `rtb-azd4dt1c`.
     */
    public $RouteTableId;

    /**
     * @var string Route table name.
     */
    public $RouteTableName;

    /**
     * @var array The association relationships of the route table.
     */
    public $AssociationSet;

    /**
     * @var array Route table policy set.
     */
    public $RouteSet;

    /**
     * @var boolean Whether it is the default route table.
     */
    public $Main;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;
    /**
     * @param string $VpcId VPC instance ID.
     * @param string $RouteTableId The route table instance ID, such as `rtb-azd4dt1c`.
     * @param string $RouteTableName Route table name.
     * @param array $AssociationSet The association relationships of the route table.
     * @param array $RouteSet Route table policy set.
     * @param boolean $Main Whether it is the default route table.
     * @param string $CreatedTime Creation Time.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("AssociationSet",$param) and $param["AssociationSet"] !== null) {
            $this->AssociationSet = [];
            foreach ($param["AssociationSet"] as $key => $value){
                $obj = new RouteTableAssociation();
                $obj->deserialize($value);
                array_push($this->AssociationSet, $obj);
            }
        }

        if (array_key_exists("RouteSet",$param) and $param["RouteSet"] !== null) {
            $this->RouteSet = [];
            foreach ($param["RouteSet"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->RouteSet, $obj);
            }
        }

        if (array_key_exists("Main",$param) and $param["Main"] !== null) {
            $this->Main = $param["Main"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
