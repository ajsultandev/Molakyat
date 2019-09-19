
@extends('layouts.app')
@section('content')
<link href="{{ asset('css/global.css') }}" rel="stylesheet">

  <div class="container">
    <h2> القوائم المالية</h2>
    <br />
    <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link" href="#home" data-toggle="tab" >مركز مالي غير متداول</a>
        <a class="nav-item nav-link" href="#ready" data-toggle="tab">ربح وخسارة حسب الوظيفة </a>
        <a class="nav-item nav-link" href="#completed" data-toggle="tab">دخل شامل بعد الضريبة </a>
        <a class="nav-item nav-link" href="#allOrder" data-toggle="tab">تدفقات نقدية غير مباشرة </a>
    </nav>

    
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="home">
            <table border="1" class="table table-bordered">
                    <tr>
                        <td >قائمة المركز المالي، متداول/ غير متداول، غير الموحدة </td>
                            <td> النقد وأرصدة لدى البنوك</td>
                            <td>ودائع قصيرة الأجل (غير مصنفة ضمن النقد ومعادلات النقد) </td>

                            <td>موجودات مالية بغرض المتاجرة، متداولة</td>
                            
                            <td>
                                موجودات مالية متاحة للبيع، متداولة
                            </td>

                            <td>
                               استثمارات محتفظ بها بغرض الاستحقاق، متداولة
                            </td>
                            <td>
                               موجودات مالية أخرى، متداولة
                            </td>    
                            <td>
                                المبالغ المستحقة من المدينيين التجاريين وغيرهم

                            </td>        
                            <td>
                                دفعات مقدمة للموردين والمقاولين، متداولة

                            </td>        
                            <td>
                               مدينون عقود إيجار تمويلي، متداولة

                            </td>        
                            <td>
                                إيجار مستحق القبض

                            </td>             
                            <td>
                               مصاريف مدفوعة مقدما

                            </td>        
                            <td>
                              إيرادات مستحقة

                            </td>        
                            <td>
                               أعمال تحت التنفيذ ( إيرادات لم يصدر بها فواتير)

                            </td>        
                            <td>
                                    أرصدة مستحقة من جهات ذات علاقة، متداولة
                            </td>  
                            <td>
                                    أدوات / موجودات مالية مشتقة، متداولة
                            </td>  
                            <td>المخزون</td>  
                            <td>موجودات حيوية، متداولة</td>  
                            <td>موجودات برامج، متداولة</td> 
                            <td>صافي موجودات منافع موظفين محددة، متداولة
                            </td> 
                            <td>
                                    موجودات متداولة أخرى
                            </td> 
                            <td>
                                    موجودات زكاة
                            </td> 
                            <td>
                                    موجودات ضريبة دخل
                            </td> 
                            <td>
                                موجودات غير متداولة أو مجموعات استبعاد متاحة للبيع أو التوزيع للملاك
                            </td>

                            <td>موجودات مالية متاحة للبيع، غير متداولة</td>

                            <td>استثمارات محتفظ بها للاستحقاق، غير متداولة</td>

                            <td>موجودات مالية أخرى، غير متداولة</td>
                            <td>ودائع طويلة الأجل</td>
                            
                            <td>دفعات مقدمة للموردين والمقاولين، غير متداولة</td>
                            
                            <td>مدينون عقود إيجار تمويلي، غير متداولة</td>

                            <td>العقارات والآلات والمعدات</td>
                            
                            <td>موجودات استكشاف وتقويم</td>
                            <td>موجودات متعلقة بالنفط والغاز</td>
                            <td>موجودات حيوية، غير متداولة</td>
                            <td>موجودات بموجب عقود إيجار تمويلية</td>
                            <td>شهرة</td>
                            <td>موجودات غير ملموسة باستثناء الشهرة</td>
                            <td>أدوات / موجودات مالية مشتقة، غير متداولة</td>
                            <td>العقارات الاستثمارية</td>
                           <td> استثمارات في شركات زميلة</td>
                            <td>استثمارات في مشاريع مشتركة</td>
                            <td>استثمارات في شركات تابعة</td>
                            <td>استثمارات في غير شركات تابعة، زميلة ومشاريع مشتركة</td>
                           <td> موجودات ضريبية مؤجلة</td>
                           <td> موجودات برامج، غير متداولة</td>
                           <td> صافي موجودات منافع موظفين محددة، غير متداولة</td>
                           <td> أرصدة مستحقة من جهات ذات علاقة، غير متداولة</td>
                           <td> موجودات غير متداولة أخرى</td>
                           <td> مخصص منافع موظفين أخرى، متداولة</td>
                           <td>مخصصات أخرى، متداولة </td>

                            <td>مطلوبات مالية بغرض المتاجرة، متداولة</td>
                            <td>مطلوبات مالية أخرى، متداولة</td>
                            <td>سندات دين وقروض لأجل وقروض وصكوك مصدرة، متداولة</td>
                            <td>قروض حكومية، متداولة</td>
                            <td>قروض مساندة، متداولة</td>
                            <td>حسابات مكشوفة لدى البنوك</td>
                            <td>مبالغ مستحقة للدائنين التجاريين وغيرهم</td>
                            <td>ذمم محتجزات دائنة</td>
                            <td>مصاريف مستحقة الدفع</td>
                            <td>مطلوبات عقود إيجار تمويلي، متداولة</td>
                            <td>أرصدة مستحقة إلى جهات ذات علاقة، متداولة</td>
                            <td>ودائع / دفعات مقدمة من عملاء، متداولة</td>
                            <td>منح حكومية، متداولة</td>
                            <td>إيرادات مؤجلة، متداولة</td>
                            <td>توزيعات أرباح مستحقة</td>
                            <td>امتيازات مستحقة</td>
                            <td>أدوات / مطلوبات مالية مشتقة، متداولة</td>
                            <td>مرابحات، متداولة</td>
                            <td>صافي مطلوبات منافع موظفين محددة، متداولة</td>
                            <td>مطلوبات متداولة أخرى</td>
                            <td>التزامات زكاة</td>
                            <td>التزامات ضريبة دخل</td>
                            <td>مطلوبات مرتبطة مباشرة بموجودات أو مجموعات استبعاد متاحة
                                 للبيع أو التوزيع للملاك</td>

                            <td>مخصصات منافع موظفين أخرى طويلة الأجل، غير متداولة</td>
                            <td>مخصصات أخرى، غير متداولة</td> 
                            <td> سندات دين وقروض لأجل وقروض وصكوك مصدرة، غير متداولة</td>
                            <td> قروض حكومية، غير متداولة</td>
                            <td> قروض ثانوية، غير متداولة</td>
                            <td> مطلوبات مالية أخرى، غير متداولة</td>
                            <td> صافي مطلوبات منافع موظفين محددة، غير متداولة</td>
                            <td> مطلوبات عقود إيجار تمويلي، غير متداولة</td>
                            <td> مطلوبات ضريبية مؤجلة</td>
                            <td> منح حكومية، غير متداولة</td>
                            <td> إيرادات مؤجلة، غير متداولة</td>
                            <td> أدوات / مطلوبات مالية مشتقة، غير متداولة</td>
                            <td> مرابحات، غير متداولة</td>
                            <td> ودائع / دفعات مقدمة من عملاء، غير متداولة</td>
                            <td> أرصدة مستحقة إلى جهات ذات علاقة، غير متداولة</td>
                            <td> مطلوبات غير متداولة أخرى</td>

                            <td>رأس المال</td> 
                            <td>علاوة إصدار</td> 
                            <td>أسهم خزينة</td> 
                            <td>احتياطي نظامي</td> 
                            <td>احتياطي عام</td> 
                            <td>أرباح مبقاة (خسائر متراكمة)</td> 
                            <td>رأس المال الإضافي</td> 
                            <td>عناصر أخرى لحقوق الملكية</td> 

                           <td> احتياطي إعادة تقييم موجودات</td>
                            <td>احتياطي فروقات ترجمة عملات أجنبية</td>
                            <td>احتياطي تغطية مخاطر تدفقات نقدية</td>
                            <td>احتياطي أدوات مالية متاحة للبيع</td>
                            <td>احتياطي الدفعات المحسوبة على أساس الأسهم</td>
                            <td>احتياطي إعادة تقييم برامج المنافع المحددة</td>
                           <td> احتياطي موجودات غير متداولة أو مجموعات استبعاد متاحة للبيع أو التوزيع للملاك</td>
                           <td>احتياطيات متنوعة</td>
                        </tr>
                @foreach($FinancialCenter as $fin)
                <tr>
                    @foreach ($fin as $key => $value)
                    <td>{{$value}}</td>
                    @endforeach
                </tr>
                @endforeach
          </table>
        </div>

        <div class="tab-pane fade" id="ready">
            <table class="table table-bordered">
                    @foreach($ProfitsAndLosses as $fin)
                    <tr>
                        @foreach ($fin as $key => $value)
                        <td>{{$value}}</td>
                        @endforeach
                    </tr>
                    @endforeach
            </table>
        </div>
        <div class="tab-pane fade" id="completed">
            <table class="table table-bordered">
                @foreach($ComprehensiveIncome as $fin)
                    <tr>
                        @foreach ($fin as $key => $value)
                        <td>{{$value}}</td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="tab-pane fade" id="allOrder">
                <table class="table table-bordered">
                    @foreach($IndirectCashFlows as $fin)
                        <tr>
                            @foreach ($fin as $key => $value)
                            <td>{{$value}}</td>
                            @endforeach
                        </tr>
                    @endforeach
    
                  </table>
            </div>        
      </div>
  </div>
  
  @endsection
