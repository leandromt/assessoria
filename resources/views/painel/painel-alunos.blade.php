<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alunos</title>
</head>
<body>

	<h1>Alunos cadastrados</h1>
	
	<table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th>Matricula</th>
				<th>Ativo</th>
			</tr>
		</thead>
		<tbody>
		@foreach($alunos as $aluno)
			<tr>
				<td>{{ $aluno->nome }}</td>
				<td>{{ $aluno->email }}</td>
				<td>{{ $aluno->matricula }}</td>
				<td>{{ $aluno->ativo }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	
</body>
</html>