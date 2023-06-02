import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { TercerosService } from '../../shared/terceros.service';
import { FormBuilder, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-tercero',
  templateUrl: './tercero.component.html',
  styleUrls: ['./tercero.component.scss'],
})

export class TercerosComponent implements OnInit {
  tercerosForm: FormGroup;
  errors: any = null;

  constructor(
    public router: Router,
    public fb: FormBuilder,
    public tercerosService: TercerosService
  ) {
    this.tercerosForm = this.fb.group({
      nit: [''],
      razon_social: [''],
      ciuu: [''],
      activo: [''],
    });
  }

  ngOnInit() {}

  onSubmit() {
    this.tercerosService.crearTercero(this.tercerosForm.value).subscribe(
      (result) => {
        console.log(result);
      },
      (error) => {
        this.errors = error.error;
      },
      () => {
        this.tercerosForm.reset();        
      }
    );
  }
}
