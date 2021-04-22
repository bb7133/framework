<?php

namespace Illuminate\Database\Query\Grammars;

class TiDBGrammar extends MySqlGrammar
{
    /**
     * Determine if the grammar supports savepoints.
     *
     * @return bool
     */
    public function supportsSavepoints()
    {
        return false;
    }
}