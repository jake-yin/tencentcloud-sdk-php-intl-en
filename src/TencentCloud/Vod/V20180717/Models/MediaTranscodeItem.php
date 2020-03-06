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
 * @method string getUrl() Obtain Address of output video file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Address of output video file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDefinition() Obtain Transcoding specification ID. For more information, please see [Transcoding Parameter Template](https://cloud.tencent.com/document/product/266/33478#.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDefinition(integer $Definition) Set Transcoding specification ID. For more information, please see [Transcoding Parameter Template](https://cloud.tencent.com/document/product/266/33478#.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBitrate() Obtain Sum of the average bitrate of a video stream and that of an audio stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBitrate(integer $Bitrate) Set Sum of the average bitrate of a video stream and that of an audio stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain Maximum value of the height of a video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set Maximum value of the height of a video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain Maximum value of the width of a video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set Maximum value of the width of a video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSize() Obtain Total size of a media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSize(integer $Size) Set Total size of a media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getDuration() Obtain Video duration in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(float $Duration) Set Video duration in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getContainer() Obtain Container, such as m4a and mp4.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setContainer(string $Container) Set Container, such as m4a and mp4.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMd5() Obtain MD5 value of video.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMd5(string $Md5) Set MD5 value of video.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAudioStreamSet() Obtain Audio stream information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioStreamSet(array $AudioStreamSet) Set Audio stream information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getVideoStreamSet() Obtain Video stream information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVideoStreamSet(array $VideoStreamSet) Set Video stream information.
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Transcoding information
 */
class MediaTranscodeItem extends AbstractModel
{
    /**
     * @var string Address of output video file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var integer Transcoding specification ID. For more information, please see [Transcoding Parameter Template](https://cloud.tencent.com/document/product/266/33478#.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Definition;

    /**
     * @var integer Sum of the average bitrate of a video stream and that of an audio stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Bitrate;

    /**
     * @var integer Maximum value of the height of a video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var integer Maximum value of the width of a video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var integer Total size of a media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Size;

    /**
     * @var float Video duration in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var string Container, such as m4a and mp4.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Container;

    /**
     * @var string MD5 value of video.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Md5;

    /**
     * @var array Audio stream information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioStreamSet;

    /**
     * @var array Video stream information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VideoStreamSet;
    /**
     * @param string $Url Address of output video file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Definition Transcoding specification ID. For more information, please see [Transcoding Parameter Template](https://cloud.tencent.com/document/product/266/33478#.E8.BD.AC.E7.A0.81.E6.A8.A1.E6.9D.BF).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Bitrate Sum of the average bitrate of a video stream and that of an audio stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Height Maximum value of the height of a video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Width Maximum value of the width of a video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Size Total size of a media file in bytes (which is the sum of size of m3u8 and ts files if the video is in HLS format).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $Duration Video duration in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Container Container, such as m4a and mp4.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Md5 MD5 value of video.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AudioStreamSet Audio stream information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $VideoStreamSet Video stream information.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("AudioStreamSet",$param) and $param["AudioStreamSet"] !== null) {
            $this->AudioStreamSet = [];
            foreach ($param["AudioStreamSet"] as $key => $value){
                $obj = new MediaAudioStreamItem();
                $obj->deserialize($value);
                array_push($this->AudioStreamSet, $obj);
            }
        }

        if (array_key_exists("VideoStreamSet",$param) and $param["VideoStreamSet"] !== null) {
            $this->VideoStreamSet = [];
            foreach ($param["VideoStreamSet"] as $key => $value){
                $obj = new MediaVideoStreamItem();
                $obj->deserialize($value);
                array_push($this->VideoStreamSet, $obj);
            }
        }
    }
}
