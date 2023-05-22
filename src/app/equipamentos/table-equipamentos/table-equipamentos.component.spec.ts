import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TableEquipamentosComponent } from './table-equipamentos.component';

describe('TableEquipamentosComponent', () => {
  let component: TableEquipamentosComponent;
  let fixture: ComponentFixture<TableEquipamentosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TableEquipamentosComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TableEquipamentosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
