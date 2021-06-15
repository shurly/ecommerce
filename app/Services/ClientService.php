<?php

namespace App\Services;

use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClientService
{
    public function saveUser(User $user, Address $address)
    {
        try{
            //Busca um usuário com o cpf salvo (busca se já existe esse cpf cadastrado)
            $dbUser = User::where('cpf', $user->cpf)->first();
            if($dbUser)
            {
                return ['status' => 'error', 'message' => 'CPF já cadastrado no sistema'];
            }

            DB::beginTransaction(); //Iniciar a transação
            $user->save(); //Salva o usuário
            $address->user_id = $user->id; //Relaciona as tabelas
            $address->save(); //salva o endereço
            DB::commit(); //Confirmar a transação

            return['status' => 'ok', 'message' => 'Usuário cadastrado com sucesso!'];
        }catch (\Exception $e){
            //Tratar os erros e mandar mensagem amigável ao cliente

            Log::error('ERRO', ['file' => 'ClientService.saveUser', 'message' => $e->getMessage()]);

            DB::rollback(); //Cancelar a trasanção

            return ['status' => 'error', 'message' => 'Não foi possível cadastrar'];
        }
    }
}
