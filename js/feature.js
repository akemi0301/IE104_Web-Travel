// const pg = document.querySelector('pagination');
// const valuePage = {
//      truncate: true, 
//      curPage: 1,
//      numLinksTowSide: 1,
//      totalPage: 6,
// }
// function pagination(){
//      const{ totalPage, curPage, truncate, numLinksTowSide: delta = valuePage}

// }
// const range = delta +4;
// const numberTruncateLeft = curPage - delta;
// const numberTruncateRight = curPage + delta;
// let active = '';
//     for (let pos = 1; pos <= totalPages; pos++) {
//         active = pos == curPage ? 'active' : '';
//         if (totalPages >= 2 * range - 1 && truncate) {
//             if ( numberTruncateLeft > 3 && numberTruncateRight < totalPages - 3 + 1){
//                 // truncate 2 side
//                 if (pos >= numberTruncateLeft && pos <= numberTruncateRight) {
//                   renderTwoSide += renderPage(pos, active);
//                 }
//             } 
//         } else {
//             // not truncate
//             render += renderPage(pos, active);
//         }
//     }