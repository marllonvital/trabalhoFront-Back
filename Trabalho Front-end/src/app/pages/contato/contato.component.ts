import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-contato',
  templateUrl: './contato.component.html',
  styleUrls: ['./contato.component.css']
})
export class ContatoComponent implements OnInit {

	telefoneError: boolean = false;

  constructor() { }

  ngOnInit() {
  }

   checkTelefone(telefone){
    if(telefone.value.length!=9)
      this.telefoneError = true;
    else
      this.telefoneError = false;
  }
}
