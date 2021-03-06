<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TextColumn File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* TextColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class TextColumn extends Entity
{
    /**
    * Gets the allowMultipleLines
    *
    * @return bool The allowMultipleLines
    */
    public function getAllowMultipleLines()
    {
        if (array_key_exists("allowMultipleLines", $this->_propDict)) {
            return $this->_propDict["allowMultipleLines"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMultipleLines
    *
    * @param bool $val The value of the allowMultipleLines
    *
    * @return TextColumn
    */
    public function setAllowMultipleLines($val)
    {
        $this->_propDict["allowMultipleLines"] = $val;
        return $this;
    }
    /**
    * Gets the appendChangesToExistingText
    *
    * @return bool The appendChangesToExistingText
    */
    public function getAppendChangesToExistingText()
    {
        if (array_key_exists("appendChangesToExistingText", $this->_propDict)) {
            return $this->_propDict["appendChangesToExistingText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appendChangesToExistingText
    *
    * @param bool $val The value of the appendChangesToExistingText
    *
    * @return TextColumn
    */
    public function setAppendChangesToExistingText($val)
    {
        $this->_propDict["appendChangesToExistingText"] = $val;
        return $this;
    }
    /**
    * Gets the linesForEditing
    *
    * @return int The linesForEditing
    */
    public function getLinesForEditing()
    {
        if (array_key_exists("linesForEditing", $this->_propDict)) {
            return $this->_propDict["linesForEditing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the linesForEditing
    *
    * @param int $val The value of the linesForEditing
    *
    * @return TextColumn
    */
    public function setLinesForEditing($val)
    {
        $this->_propDict["linesForEditing"] = $val;
        return $this;
    }
    /**
    * Gets the maxLength
    *
    * @return int The maxLength
    */
    public function getMaxLength()
    {
        if (array_key_exists("maxLength", $this->_propDict)) {
            return $this->_propDict["maxLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxLength
    *
    * @param int $val The value of the maxLength
    *
    * @return TextColumn
    */
    public function setMaxLength($val)
    {
        $this->_propDict["maxLength"] = $val;
        return $this;
    }
    /**
    * Gets the textType
    *
    * @return string The textType
    */
    public function getTextType()
    {
        if (array_key_exists("textType", $this->_propDict)) {
            return $this->_propDict["textType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the textType
    *
    * @param string $val The value of the textType
    *
    * @return TextColumn
    */
    public function setTextType($val)
    {
        $this->_propDict["textType"] = $val;
        return $this;
    }
}
