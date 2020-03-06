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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method float getConfidence() Obtain Score of ASR-detected politically sensitive information in speech between 0 and 100.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConfidence(float $Confidence) Set Score of ASR-detected politically sensitive information in speech between 0 and 100.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestion() Obtain Suggestion for ASR-detected politically sensitive information in speech. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestion(string $Suggestion) Set Suggestion for ASR-detected politically sensitive information in speech. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSegmentSet() Obtain List of video segments that contain ASR-detected politically sensitive information in speech.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentSet(array $SegmentSet) Set List of video segments that contain ASR-detected politically sensitive information in speech.
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *ASR-detected politically sensitive information in speech
 */
class AiReviewPoliticalAsrTaskOutput extends AbstractModel
{
    /**
     * @var float Score of ASR-detected politically sensitive information in speech between 0 and 100.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Confidence;

    /**
     * @var string Suggestion for ASR-detected politically sensitive information in speech. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Suggestion;

    /**
     * @var array List of video segments that contain ASR-detected politically sensitive information in speech.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentSet;
    /**
     * @param float $Confidence Score of ASR-detected politically sensitive information in speech between 0 and 100.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Suggestion Suggestion for ASR-detected politically sensitive information in speech. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SegmentSet List of video segments that contain ASR-detected politically sensitive information in speech.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new MediaContentReviewAsrTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
