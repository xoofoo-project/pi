<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

namespace Pi\User\Avatar;

use Pi;

/**
 * Local avatar handler
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class Local extends AbstractAvatar
{
    /**
     * {@inheritDoc}
     */
    public function getSource($uid, $size = '')
    {
        $src = $this->build('', $size);

        return $src;
    }

    /**
     * {@inheritDoc}
     */
    public function build($source, $size = '')
    {
        $folder = $this->canonizeSize($size, false);
        $path = sprintf('static/avatar/%s.png', $folder);
        $src = Pi::url($path);

        return $src;
    }
}
