>>   n     := 3:
   perms := combinat::permutations(n):
   rank  := combinat::rankers::fromList(perms)[1]:
   Mat   := Dom::SquareMatrix(n!):
   siMatrix :=
   proc(i) : Mat
   begin
     mat := Mat::zero;
     for p in perms do
       mat[rank(combinat::words::swap(p,i)), rank(p)] :=1;
     end;
     mat;
   end:
   piMatrix :=
   proc(i) : Mat
   begin
     mat := Mat::zero;
     for p in perms do
       mat[rank(combinat::words::swapDecrease(p,i)), rank(p)] :=1;
     end:
     mat;
   end:


>>   siMatrix(1), piMatrix(1)


>>   nops(Mat::algebraClosure([piMatrix(i) $ i=1..n-1, siMatrix(i) $ i=1..n-1]))


>>   myTools::findSloane([1,3,19,211]);


>> domain NonDecreasingFunctions(N)
     inherits Dom::BaseDomain;
     category Cat::CombinatorialClass, Cat::FacadeDomain(DOM_LIST);
 
     list :=
     proc()
 option remember;
     begin
 _concat(combinat::integerVectors::list(i, N,
        MinSlope=0,
        MinPart=1, MaxPart=N)
 $ i=N..N^2);
     end_proc;
 end:


>> domain NDF(N : Type::NonNegInt,
        R = Dom::ExpressionField())
 
     category Cat::FiniteDimensionalAlgebraWithBasis(R);
     inherits Dom::FreeModule(R, NonDecreasingFunctions(N));
 
     printTerm := l->_concat(hold(f), op(l));
 
     oneBasis := [$1..N];
 
     mult2Basis :=
     proc(part1 : dom::basisIndices, part2 : dom::basisIndices)
 local i;
     begin
         dom::term([part1[part2[i]] $ i=1..N]);
     end_proc;
 end_domain:


>> setuserinfo(experimental::algTools, 3):


>> experimental::algTools::Desosse(NDF(1)):


>> experimental::algTools::Desosse(NDF(2)):


>> experimental::algTools::Desosse(NDF(3)):


>> experimental::algTools::Desosse(NDF(4)):


>> experimental::algTools::Desosse(NDF(5)):


>> domain NonDecreasingFunctions(N)
     inherits Dom::BaseDomain;
     category Cat::CombinatorialClass, Cat::FacadeDomain(DOM_LIST);
 
     list :=
     proc()
 option remember;
     begin
 _concat(combinat::integerVectors::list(i, N,
        MinSlope=0,
        MinPart=1, MaxPart=N)
 $ i=N..N^2);
     end_proc;
 end:


>> domain NDF(N : Type::NonNegInt,
        R = Dom::ExpressionField())
 
     category Cat::FiniteDimensionalAlgebraWithBasis(R);
     inherits Dom::FreeModule(R, NonDecreasingFunctions(N));
 
     printTerm := l->_concat(hold(f), op(l));
 
     oneBasis := [$1..N];
 
     mult2Basis :=
     proc(part1 : dom::basisIndices, part2 : dom::basisIndices)
 local i;
     begin
         dom::term([part1[part2[i]] $ i=1..N]);
     end_proc;
 end_domain:


>> setuserinfo(experimental::algTools, 3):


>> experimental::algTools::Desosse(NDF(1)):


>> experimental::algTools::Desosse(NDF(2)):


>> experimental::algTools::Desosse(NDF(3)):


>> experimental::algTools::Desosse(NDF(4)):


>> experimental::algTools::Desosse(NDF(5)):


>> domain NonDecreasingFunctions(N)
     inherits Dom::BaseDomain;
     category Cat::CombinatorialClass, Cat::FacadeDomain(DOM_LIST);
 
     list :=
     proc()
 option remember;
     begin
 _concat(combinat::integerVectors::list(i, N,
        MinSlope=0,
        MinPart=1, MaxPart=N)
 $ i=N..N^2);
     end_proc;
 end:


>> domain NDF(N : Type::NonNegInt,
        R = Dom::ExpressionField())
 
     category Cat::FiniteDimensionalAlgebraWithBasis(R);
     inherits Dom::FreeModule(R, NonDecreasingFunctions(N));
 
     printTerm := l->_concat(hold(f), op(l));
 
     oneBasis := [$1..N];
 
     mult2Basis :=
     proc(part1 : dom::basisIndices, part2 : dom::basisIndices)
 local i;
     begin
         dom::term([part1[part2[i]] $ i=1..N]);
     end_proc;
 end_domain:


>> setuserinfo(experimental::algTools, 3):


>> experimental::algTools::Desosse(NDF(1)):


>> experimental::algTools::Desosse(NDF(2)):


>> experimental::algTools::Desosse(NDF(3)):


>> experimental::algTools::Desosse(NDF(4)):


>> experimental::algTools::Desosse(NDF(5)):


