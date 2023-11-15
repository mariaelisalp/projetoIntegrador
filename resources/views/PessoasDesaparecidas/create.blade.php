@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
    <div class="container"></div>
        <h1> Registrar Pessoa Desaparecida </h1>
        <hr>
        <form action="{{route('pessoasDesaparecidas-store')}}" method= 'POST'>
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" placeholder = "nome completo">

                    <label for="eyecolor">Cor dos Olhos</label>
                    <input type="text" name="eyecolor">

                    <label for="skincolor">Cor da Pele</label>
                    <input type="text" name="skincolor">

                    <label for="gender">Sexo</label>
                    <select id = "gender" name = "gender">
                        <option value = "F">F</option>
                        <option value = "M">M</option>
                    </select>

                    <label for="desappearingCity">Cidade</label>
                    <input type="text" name="desappearingCity">

                    <label for="state">Estado</label>
                    <input type="text" name="state">

                    <label for="weight">Peso(kg)</label>
                    <input type="text" name="weight">

                    <label for="birthDate">Data de Nascimento</label>
                    <input type="date" name="birthDate">

                    <label for="desappearingDate">Data de Desaparecimento</label>
                    <input type="date" name="desappearingDate">

                    <label for="currentAge">Idade Atual</label>
                    <input type="text" name="currentAge">

                    <label for="age">Idade(data de desaparecimento)</label>
                    <input type="text" name="age">

                    <label for="status">Status</label>
                    <select id = "status" name = "status">
                        <option value = "Desaparecido">Desaparecido</option>
                        <option value = "Localizado">Localizado</option>
                    </select>

                    <label for="fatherName">Nome do pai</label>
                    <input type="text" name="fatherName">

                    <label for="motherName">Nome da mãe</label>
                    <input type="text" name="motherName">

                    <label for="height">Altura</label>
                    <input type="text" name="height">

                    <label for="otherFeatures">Características Adicionais</label>
                    <textarea name="otherFeatures" id="" cols="30" rows="10"></textarea>

                    <label for="circumstances">Circunstâncias</label>
                    <textarea name="circumstances" id="" cols="30" rows="10"></textarea>

                    <label for="motivations">Possíveis Motivações</label>
                    <textarea name="motivations" id="" cols="30" rows="10"></textarea>

                    <label for="policeStationPhoneNumber">Telefone Delegacia</label>
                    <input type="tel" name="policeStationPhoneNumber"  required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}">

                    <label for="familyOrFriendsPhoneNumber">Telefone (Responsáveis)</label>
                    <input type="tel" name="familyOrFriendsPhoneNumber"  required pattern="[0-9]{2} [0-9]{5}-[0-9]{4}">

                    <label for="email">Email para contato</label>
                    <input type="email" name="email"><br><br>

                    <button type = "submit" >Registrar</button>
                    

                </div>  
            </div>     
        </form>
    </div>
       
@endsection