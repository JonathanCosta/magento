<?php

class Konduto_Score_Model_Score extends Mage_Core_Model_Abstract
{
    const RECOMMENDATION_APPROVED = 'APPROVE';
    const RECOMMENDATION_DECLINED = 'DECLINE';
    const RECOMMENDATION_NONE = 'NONE';

    public function _construct()
    {
        parent::_construct();
        $this->_init('score/score');
    }

    public function isApproved($orderId = false)
    {
        if($orderId) {
            $this->load($orderId, 'order_no');
        }
        return $this->getRecommendation() == self::RECOMMENDATION_APPROVED;
    }

    public function isDeclined($orderId = false)
    {
        if($orderId) {
            $this->load($orderId, 'order_no');
        }
        return $this->getRecommendation() == self::RECOMMENDATION_DECLINED;
    }
}
