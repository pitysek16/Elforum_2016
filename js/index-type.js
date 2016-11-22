function updateDOM(titleSegment) {
  $('.call-out__title').empty().append(titleSegment);
}

function createSegment(title, segmentEnd) {
  var cursor = "<span class='call-out__cursor'>I</span>";
  var titleSegment = title.slice(0, segmentEnd) + cursor;
  
  return titleSegment;
}

function simulateTyping(index, title, segmentEnd, direction) {
  segmentEnd = segmentEnd || 0;
  direction = direction || 'INCREMENT';
  
  var titleSegment = createSegment(title, segmentEnd);
  
  updateDOM(titleSegment);
  
  if (direction === 'INCREMENT') {  
    if (segmentEnd < title.length) {
      segmentEnd++;
    } else {
      direction = 'DECREMENT';
    }
    
    setTimeout(function() {simulateTyping(index, title, segmentEnd, direction)}, 150);
  
  } else {
    if (segmentEnd > 0) {
      segmentEnd--;
      setTimeout(function() {simulateTyping(index, title, segmentEnd, direction)}, 150);
    } else {
      index++;
      setTimeout(function() {nextTitle(index)}, 150);
    }
  } 
}

function nextTitle(index) {
  index = index || 0;
  
  var titles = [
    'профессионалов ',
    '',
    'практиков ',
    '',
    'фанатов ',
    '',
    'профессионалов ',
    ''
  ];
  var title = titles[index];
  
  if (index >= titles.length - 1) {
    index = 0;
  } 

  setTimeout(function() {simulateTyping(index, title)}, 150);
}

nextTitle();