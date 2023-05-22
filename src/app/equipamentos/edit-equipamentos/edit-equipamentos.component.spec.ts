import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditEquipamentosComponent } from './edit-equipamentos.component';

describe('EditEquipamentosComponent', () => {
  let component: EditEquipamentosComponent;
  let fixture: ComponentFixture<EditEquipamentosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditEquipamentosComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EditEquipamentosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
