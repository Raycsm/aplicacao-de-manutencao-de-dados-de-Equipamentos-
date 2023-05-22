import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormEquipamentosComponent } from './form-equipamentos.component';

describe('FormEquipamentosComponent', () => {
  let component: FormEquipamentosComponent;
  let fixture: ComponentFixture<FormEquipamentosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FormEquipamentosComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(FormEquipamentosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
