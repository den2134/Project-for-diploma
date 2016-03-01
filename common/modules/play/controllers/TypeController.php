<?php

namespace common\modules\play\controllers;

use yii\web\Controller;
use yii\db\Expression;
use yii\db\Query;

class TypeController extends Controller
{
    /**
     * @return string
     */

    public function actionWords()
    {
        $model = (new Query())
            ->select(['string'])
            ->from('word')
            ->orderBy(new Expression('rand()'))
            ->limit(1)->all();


        $arr = explode(',', $model[0]['string']);
        $rand_key = array_rand($arr, 40);
        $text = '';
        for ($i = 0; $i < 40; $i++)
            $text .= $arr[$rand_key[$i]] . ' ';

        $text = rtrim($text, ' ');
        return $this->render('words', ['text' => $text]);
    }

    /**
     * @param int $length
     * @return string
     */

    function randomEnWord($length = 5)
    {

        // consonant sounds
        $cons = array(
            // single consonants. Beware of Q, it's often awkward in words
            'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm',
            'n', 'p', 'r', 's', 't', 'v', 'w', 'x', 'z',
            // possible combinations excluding those which cannot start a word
            'pt', 'gl', 'gr', 'ch', 'ph', 'ps', 'sh', 'st', 'th', 'wh',
        );

        // consonant combinations that cannot start a word
        $cons_cant_start = array(
            'ck', 'cm',
            'dr', 'ds',
            'ft',
            'gh', 'gn',
            'kr', 'ks',
            'ls', 'lt', 'lr',
            'mp', 'mt', 'ms',
            'ng', 'ns',
            'rd', 'rg', 'rs', 'rt',
            'ss',
            'ts', 'tch',
        );

        // wovels
        $vows = array(
            // single vowels
            'a', 'e', 'i', 'o', 'u', 'y',
            // vowel combinations your language allows
            'ee', 'oa', 'oo',
        );

        // start by vowel or consonant ?
        $current = (mt_rand(0, 1) == '0' ? 'cons' : 'vows');

        $word = '';

        while (strlen($word) < $length) {

            // After first letter, use all consonant combos
            if (strlen($word) == 2)
                $cons = array_merge($cons, $cons_cant_start);

            // random sign from either $cons or $vows
            $rnd = ${$current}[mt_rand(0, count(${$current}) - 1)];

            // check if random sign fits in word length
            if (strlen($word . $rnd) <= $length) {
                $word .= $rnd;
                // alternate sounds
                $current = ($current == 'cons' ? 'vows' : 'cons');
            }
        }

        return $word;
    }
}