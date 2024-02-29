<?php
class form
{
    // Propriedades
    private string $fullname;
    private string $password;
    private string $email;
    private array $fillable;

    // Métodos

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        if (in_array($attribute, $this->fillable))
            $this->$attribute = $value;
    }

    public function __toString()
    {
        $clientStatus = ($this->status) ? "Ativo" : "Inativo";
        return 'Nome completo: ' . $this->fullname . "\nNome: " . $this->email . "\nEmail: " . $this->password . "\n: " . $clientStatus;
    }
}