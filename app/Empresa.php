<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "empresa";

    public function telefonesEmpresa(){
        return $this->hasMany('App\TelefoneEmpresa');
    }
    public function contasBancariasEmpresa(){
        return $this->hasOne('App\ContaBancariaEmpresa');
    }
    public function solicitacoesValeEmpresa(){
        return $this->hasMany('App\SolicitacaoVale');
    }
    public function funcionariosEmpresa(){
        return $this->hasMany('App\Funcionario');
    }
    public function solicitacoesCadastro(){
        return $this->hasMany('App\SolicitacaoCadastro');
    }
    public function user(){
        return $this->hasOne('App\User');
    }

    public function aprovarCadastro(){
        $this->ativo = true;
        $this->save();
    }
    public function reprovarCadastro(){
        $this->ativo = false;
        $this->save();
    }
}
