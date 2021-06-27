import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductFormAddComponent } from './product-form-add.component';

describe('ProductFormAddComponent', () => {
  let component: ProductFormAddComponent;
  let fixture: ComponentFixture<ProductFormAddComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductFormAddComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductFormAddComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
