import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from './../../shared/auth.service';
import { PedidosService } from './../../shared/pedidos.service';
import { FormBuilder, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-pedido',
  templateUrl: './pedido.component.html',
  styleUrls: ['./pedidos.component.scss'],
})

export class PedidosComponent implements OnInit {
  pedidosForm: FormGroup ;
  errors: any = null;

  constructor(
    public router: Router,
    public fb: FormBuilder,
    public pedidosService: PedidosService
  ) {
    this.pedidosForm = this.fb.group({
      fecha_pedido:[''],
      prefijo:[''],
      num_pedido:[''],
      nit:[''],
      razon_social:[''],
      vendedor:[''],
      departamento:[''],
      ciudad:[''],
    });
  }

  ngOnInit() {}

  onSubmit() {
    this.pedidosService.crearPedido(this.pedidosForm.value).subscribe(
      (result) => {
        console.log(result);
      },
      (error) => {
        this.errors = error.error;
      },
      () => {
        this.pedidosForm.reset();
        //this.router.navigate(['login']);
      }
    );
  }
}
