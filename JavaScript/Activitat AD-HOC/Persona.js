class Persona {

	constructor(nom, email, edat, anysExperiencia, sexe) {
		this.nom = nom;
		this.email = email;
		this.edat = edat;
		this.anysExperiencia = anysExperiencia;
		this.sexe = sexe;
	}

	info(){
		return '<td>' + this.nom + '<td>' + this.email + '<td>' + this.edat +'<td>' + this.anysExperiencia +'<td>' + this.sexe;
	}
}