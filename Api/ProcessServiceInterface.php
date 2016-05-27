<?php
/**
 * This file is part of Glugox.
 *
 * (c) Glugox <glugox@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glugox\Core\Api;


interface ProcessServiceInterface
{

    /**
     * @param $code
     * @param array $data
     * @param bool $forceNew
     * @return mixed
     */
    public function getProcess($code, array $data, $forceNew = false);


    /**
     * @param mixed $process
     * @return mixed
     */
    public function startProcess( $process );

    /**
     * @param $process
     * @param null $error
     * @return mixed
     */
    public function finishProcess( $process, $error = null );


    /**
     * @param $process
     * @param array $data
     * @return mixed
     */
    public function updateProcess( $process, array $data= [] );
}