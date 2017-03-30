<?php

abstract class JijiAR extends CActiveRecord {

    protected function beforeValidate() {
        if ($this->isNewRecord) {
            $this->creationDate = $this->modificationDate = round(microtime(1) * 1000);
        } else {
            $this->modificationDate = round(microtime(1) * 1000);
        }
        return parent::beforeValidate();
    }

}
