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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getStepAll() Obtain Total number of steps
 * @method void setStepAll(integer $StepAll) Set Total number of steps
 * @method integer getStepNow() Obtain Current step
 * @method void setStepNow(integer $StepNow) Set Current step
 * @method string getProgress() Obtain Overall progress, such as:
 * @method void setProgress(string $Progress) Set Overall progress, such as:
 * @method string getCurrentStepProgress() Obtain Progress of the current step, such as:
 * @method void setCurrentStepProgress(string $CurrentStepProgress) Set Progress of the current step, such as:
 * @method integer getMasterSlaveDistance() Obtain Master/slave difference in MB
 * @method void setMasterSlaveDistance(integer $MasterSlaveDistance) Set Master/slave difference in MB
 * @method integer getSecondsBehindMaster() Obtain Master/slave difference in seconds
 * @method void setSecondsBehindMaster(integer $SecondsBehindMaster) Set Master/slave difference in seconds
 * @method array getStepInfo() Obtain Step information
 * @method void setStepInfo(array $StepInfo) Set Step information
 */

/**
 *Describes the specific migration process
 */
class MigrateDetailInfo extends AbstractModel
{
    /**
     * @var integer Total number of steps
     */
    public $StepAll;

    /**
     * @var integer Current step
     */
    public $StepNow;

    /**
     * @var string Overall progress, such as:
     */
    public $Progress;

    /**
     * @var string Progress of the current step, such as:
     */
    public $CurrentStepProgress;

    /**
     * @var integer Master/slave difference in MB
     */
    public $MasterSlaveDistance;

    /**
     * @var integer Master/slave difference in seconds
     */
    public $SecondsBehindMaster;

    /**
     * @var array Step information
     */
    public $StepInfo;
    /**
     * @param integer $StepAll Total number of steps
     * @param integer $StepNow Current step
     * @param string $Progress Overall progress, such as:
     * @param string $CurrentStepProgress Progress of the current step, such as:
     * @param integer $MasterSlaveDistance Master/slave difference in MB
     * @param integer $SecondsBehindMaster Master/slave difference in seconds
     * @param array $StepInfo Step information
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
        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CurrentStepProgress",$param) and $param["CurrentStepProgress"] !== null) {
            $this->CurrentStepProgress = $param["CurrentStepProgress"];
        }

        if (array_key_exists("MasterSlaveDistance",$param) and $param["MasterSlaveDistance"] !== null) {
            $this->MasterSlaveDistance = $param["MasterSlaveDistance"];
        }

        if (array_key_exists("SecondsBehindMaster",$param) and $param["SecondsBehindMaster"] !== null) {
            $this->SecondsBehindMaster = $param["SecondsBehindMaster"];
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = [];
            foreach ($param["StepInfo"] as $key => $value){
                $obj = new MigrateStepDetailInfo();
                $obj->deserialize($value);
                array_push($this->StepInfo, $obj);
            }
        }
    }
}
