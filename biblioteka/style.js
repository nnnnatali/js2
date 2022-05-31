const draggables = document.querySelectorAll('.draggable')
const containers = document.querySelectorAll('.container')

draggables.forEach(draggable => {
  draggable.addEventListener('dragstart', () => {
    draggable.classList.add('dragging')
  })

  draggable.addEventListener('dragend', () => {
    draggable.classList.remove('dragging')
  })
})

function getDragAfterElement(container, y) {
  const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')]

  return draggableElements.reduce((closest, child) => {
    const box = child.getBoundingClientRect()
    const offset = y - box.top - box.height / 2
    if (offset < 0 && offset > closest.offset) {
      return { offset: offset, element: child }
    } else {
      return closest
    }
  }, { offset: Number.NEGATIVE_INFINITY }).element
}

$("button.class").on('click', function(){
  var title = $('input.name').val();
  var auther = $('input.avtor').val();
  var content = $('textarea.text-Book').val();
  console.log(title, auther, content);
  $.ajax({
    method: 'POST',
    url: 'php/add.php',
    data: {
      title : title,
      auther : auther,
      content : content
    },
    success: function (data) {
      $('#results').html(data);
     },
  });
})

function reload_interval(time){
	setTimeout(function(){
		location.reload();
	}, time);
} 