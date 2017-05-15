<?php
namespace Iriven\Interfaces;
/**
 * Created by PhpStorm.
 * User: Iriven France
 * Date: 08/04/2017
 * Time: 05:39
 */
interface FormBuilderInterface
{
    /* COMMON METHODS */
    public function Create($attributes=[]);
    public function Close();
    public function OpenFieldset($attributes=[]);
    public function CloseFieldset();

    /* INPUT TYPES */
    public function addAudio($label,$attributes=[]);
    public function addButton($label,$attributes=[]);
    public function addCaptcha($label,$attributes=[]);
    public function addCheckbox($label,$options=[],$attributes=[]);
    public function addColor($label,$attributes=[]);
    public function addCountry($label,$attributes=[]);
    public function addDate($label,$attributes=[]);
    public function addDatetime($label,$attributes=[]);
    public function addDatetimeLocal($label,$attributes=[]);
    public function addEmail($label,$attributes=[]);
    public function addFile($label,$attributes=[]);
    public function addHidden($label,$attributes=[]);
    public function addImage($label,$attributes=[]);
    public function addMonth($label,$attributes=[]);
    public function addNumber($label,$attributes=[]);
    public function addPassword($label,$attributes=[]);
    public function addPhone($label,$attributes=[]);
    public function addRadio($label,$options=[],$attributes=[]);
    public function addRange($label,$attributes=[]);
    public function addReset($label,$attributes=[]);
    public function addSearch($label,$attributes=[]);
    public function addSelect($label,$options=[],$attributes=[]);
    public function addSubmit($label,$attributes=[]);
    public function addText($label,$attributes=[]);
    public function addTextarea($label,$attributes=[]);
    public function addTextEditor($label,$attributes=[]);
    public function addTime($label,$attributes=[]);
    public function addUrl($label,$attributes=[]);
    public function addVideo($label,$attributes=[]);
    public function addWeek($label,$attributes=[]);
    public function addYesNo($label,$attributes=[]);


}
