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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The quality check output.
 *
 * @method boolean getNoAudio() Obtain Whether there is an audio track. `true` indicates that there isn't.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoAudio(boolean $NoAudio) Set Whether there is an audio track. `true` indicates that there isn't.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getNoVideo() Obtain Whether there is a video track. `true` indicates that there isn't.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoVideo(boolean $NoVideo) Set Whether there is a video track. `true` indicates that there isn't.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getQualityEvaluationScore() Obtain The no-reference video quality score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) Set The no-reference video quality score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getQualityControlResultSet() Obtain The issues detected by quality control.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQualityControlResultSet(array $QualityControlResultSet) Set The issues detected by quality control.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class QualityControlData extends AbstractModel
{
    /**
     * @var boolean Whether there is an audio track. `true` indicates that there isn't.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoAudio;

    /**
     * @var boolean Whether there is a video track. `true` indicates that there isn't.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoVideo;

    /**
     * @var integer The no-reference video quality score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityEvaluationScore;

    /**
     * @var array The issues detected by quality control.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QualityControlResultSet;

    /**
     * @param boolean $NoAudio Whether there is an audio track. `true` indicates that there isn't.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $NoVideo Whether there is a video track. `true` indicates that there isn't.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $QualityEvaluationScore The no-reference video quality score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $QualityControlResultSet The issues detected by quality control.
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
        if (array_key_exists("NoAudio",$param) and $param["NoAudio"] !== null) {
            $this->NoAudio = $param["NoAudio"];
        }

        if (array_key_exists("NoVideo",$param) and $param["NoVideo"] !== null) {
            $this->NoVideo = $param["NoVideo"];
        }

        if (array_key_exists("QualityEvaluationScore",$param) and $param["QualityEvaluationScore"] !== null) {
            $this->QualityEvaluationScore = $param["QualityEvaluationScore"];
        }

        if (array_key_exists("QualityControlResultSet",$param) and $param["QualityControlResultSet"] !== null) {
            $this->QualityControlResultSet = [];
            foreach ($param["QualityControlResultSet"] as $key => $value){
                $obj = new QualityControlResult();
                $obj->deserialize($value);
                array_push($this->QualityControlResultSet, $obj);
            }
        }
    }
}
