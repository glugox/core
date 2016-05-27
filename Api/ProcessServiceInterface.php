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


use Magento\Framework\Model\AbstractModel;

interface ProcessServiceInterface
{

    /**
     * @param $code
     * @param array $data
     */
    public function getProcess($code, array $data);


    /**
     * @param Instance $process
     * @return Instance
     */
    public function startProcess( AbstractModel $process );

    /**
     * @param Instance $process
     * @return Instance
     */
    public function finishProcess( AbstractModel $process, $error = null );


    /**
     * @param Instance $process
     * @return Instance
     */
    public function updateProcess( AbstractModel $process, $data= [] );
}