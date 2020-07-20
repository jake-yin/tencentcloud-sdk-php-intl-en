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
 * Specifications for custom transcoding
 *
 * @method string getContainer() Obtain 
 * @method void setContainer(string $Container) Set 
 * @method integer getRemoveVideo() Obtain 
 * @method void setRemoveVideo(integer $RemoveVideo) Set 
 * @method integer getRemoveAudio() Obtain 
 * @method void setRemoveAudio(integer $RemoveAudio) Set 
 * @method VideoTemplateInfo getVideoTemplate() Obtain 
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) Set 
 * @method AudioTemplateInfo getAudioTemplate() Obtain 
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) Set 
 * @method TEHDConfig getTEHDConfig() Obtain 
 * @method void setTEHDConfig(TEHDConfig $TEHDConfig) Set 
 */
class RawTranscodeParameter extends AbstractModel
{
    /**
     * @var string 
     */
    public $Container;

    /**
     * @var integer 
     */
    public $RemoveVideo;

    /**
     * @var integer 
     */
    public $RemoveAudio;

    /**
     * @var VideoTemplateInfo 
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo 
     */
    public $AudioTemplate;

    /**
     * @var TEHDConfig 
     */
    public $TEHDConfig;

    /**
     * @param string $Container 
     * @param integer $RemoveVideo 
     * @param integer $RemoveAudio 
     * @param VideoTemplateInfo $VideoTemplate 
     * @param AudioTemplateInfo $AudioTemplate 
     * @param TEHDConfig $TEHDConfig 
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("VideoTemplate",$param) and $param["VideoTemplate"] !== null) {
            $this->VideoTemplate = new VideoTemplateInfo();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfo();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new TEHDConfig();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }
    }
}
