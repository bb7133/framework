<?php

namespace Illuminate\Database\Query\Grammars;

class TiDBGrammar extends MySqlGrammar
{
    /**
     * Compile the SQL statement to define a savepoint.
     *
     * @param  string  $name
     * @return string
     */
    public function compileSavepoint($name)
    {
        // We hack the SAVEPOINT to do nothing, so that:
        // - Both nested transaction runs succesfully if there's no error.
        // - Both nested transaction rollbacks if there's error
        return '';
    }
}