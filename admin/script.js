document.addEventListener("DOMContentLoaded", () => {
 
  var hrefValue = $('#editor').attr('name');

  var newtext = $('<textarea>', {
    name:hrefValue,
    style:'visibility: hidden',
    id:'contains'
});
var content = $('#editor').val();
  // Create a new <div> element
  var newDiv = $('<div></div>', {
      id: 'editor', 
      class: 'editor', 
      text: content  
  });
  
  // Replace the textarea with the new div
  $('#editor').replaceWith(newDiv);
  const editor = document.getElementById('editor');
  editor.contentEditable=true;
  editor.style.maxHeight = '65vh';
  editor.style.overflowY = 'auto';

  $("#edcontainer").append(newtext);
  const editorContainer = document.createElement('div');
  editorContainer.classList.add('editor-container');
  editorContainer.style.width = '100%';  // Full width
  editorContainer.style.height = '700px';  // Increased height
  editorContainer.style.overflow = 'auto';


  $('#editor').on('input', function() {
    $('#contains').val($('#editor').html()); // Update textarea with div's content
  });
  // Create the toolbar container and append buttons
  const toolbar = document.createElement('div');
  toolbar.classList.add('toolbar');

  // Define toolbar buttons with icons (including blockquote button)
  const buttonData = [
    { id: 'heading-select', title: 'Select Heading', icon: 'fa-heading' },
    { id: 'bold', title: 'Bold', icon: 'fa-bold' },
    { id: 'italic', title: 'Italic', icon: 'fa-italic' },
    { id: 'underline', title: 'Underline', icon: 'fa-underline' },
    { id: 'strikethrough', title: 'Strikethrough', icon: 'fa-strikethrough' },
    { id: 'unordered-list', title: 'Unordered List', icon: 'fa-list-ul' },
    { id: 'ordered-list', title: 'Ordered List', icon: 'fa-list-ol' },
    { id: 'insert-link', title: 'Insert Link', icon: 'fa-link' },
    { id: 'align-left', title: 'Align Left', icon: 'fa-align-left' },
    { id: 'align-center', title: 'Align Center', icon: 'fa-align-center' },
    { id: 'align-right', title: 'Align Right', icon: 'fa-align-right' },
    { id: 'justify', title: 'Justify', icon: 'fa-align-justify' },
    { id: 'insert-image', title: 'Insert Image', icon: 'fa-image' },
    { id: 'insert-table', title: 'Insert Table', icon: 'fa-table' },
    { id: 'font-size', title: 'Font Size', icon: 'fa-text-height' },
    { id: 'font-family', title: 'Font Family', icon: 'fa-font' },
    { id: 'text-color', title: 'Text Color', icon: 'fa-palette' },
    { id: 'highlight-color', title: 'Highlight Color', icon: 'fa-highlighter' },
    { id: 'undo', title: 'Undo', icon: 'fa-undo' },
    { id: 'redo', title: 'Redo', icon: 'fa-redo' },
    { id: 'insert-code', title: 'Insert Code', icon: 'fa-code' },
    { id: 'fullscreen', title: 'Fullscreen', icon: 'fa-expand' },
    { id: 'blockquote', title: 'Insert Blockquote', icon: 'fa-quote-left' } ,
    { id: 'insert-youtube', title: 'Insert YouTube Video', icon: 'fa-video' },
    
    
    
  ];


  // Dynamically create buttons and append them to the toolbar
  buttonData.forEach(button => {
    if (button.id === 'heading-select') {
      const select = document.createElement('select');
      select.id = button.id;
      ['div','p','h1', 'h2', 'h3', 'h4', 'h5', 'h6'].forEach((heading) => {
        const option = document.createElement('option');
        option.value = heading;
        option.text = `Heading ${heading.charAt(1)}`;
        select.appendChild(option);
      });
      toolbar.appendChild(select);
    } else if (button.id === 'font-size' || button.id === 'font-family') {
      const select = document.createElement('select');
      select.id = button.id;
      const option = document.createElement('option');
      option.value = button.id === 'font-size' ? '16px' : 'Arial';
      option.text = button.id === 'font-size' ? '16px' : 'Arial';
      select.appendChild(option);
      toolbar.appendChild(select);
    } else if (button.id === 'text-color' || button.id === 'highlight-color') {
      const input = document.createElement('input');
      input.type = 'color';
      input.id = button.id;
      toolbar.appendChild(input);
    } else {
      const btn = document.createElement('button');
      btn.id = button.id;
      btn.title = button.title;
      // Use Font Awesome icons inside the button
      const icon = document.createElement('i');
      icon.classList.add('fas', button.icon); // Add Font Awesome classes
      btn.appendChild(icon);
      toolbar.appendChild(btn);
    }
  });

  // Insert the toolbar above the editor content
  editorContainer.appendChild(toolbar);

  // Append the original editor content area within the new container
  editorContainer.appendChild(editor);

  // Replace the original editor container with the new one
   document.body.appendChild(editorContainer);

  $("#edcontainer").append(editorContainer);

  // Add event listeners for the toolbar buttons
  document.getElementById('bold').addEventListener('click', () => toggleCommand('bold'));
  document.getElementById('italic').addEventListener('click', () => toggleCommand('italic'));
  document.getElementById('underline').addEventListener('click', () => toggleCommand('underline'));
  document.getElementById('strikethrough').addEventListener('click', () => document.execCommand('strikeThrough'));
  document.getElementById('unordered-list').addEventListener('click', () => toggleCommand('insertUnorderedList'));
  document.getElementById('ordered-list').addEventListener('click', () => toggleCommand('insertOrderedList'));
 
 

  // Insert Link
  document.getElementById('insert-link').addEventListener('click', () => {
    const linkUrl = prompt('Enter the URL:', 'http://');
    if (linkUrl) {
      document.execCommand('createLink', false, linkUrl);
    }
  });

 
    const tableGridContainer = document.createElement('div');
  tableGridContainer.id = 'tableGridContainer';
  
  // Create the table grid div
  const tableGrid = document.createElement('div');
  tableGrid.id = 'tableGrid';
  
  // Append the tableGrid to the tableGridContainer
  tableGridContainer.appendChild(tableGrid);
  
  // Append the tableGridContainer to the body (or any other container you prefer)
  document.body.appendChild(tableGridContainer);
  
  // Optionally, you can add a style to hide the table grid initially (default to hidden)
  tableGridContainer.style.display = 'none';
 
  let isDragging = false;
  let startCell = null;
  let endCell = null;

  // Show or hide the grid when the "Insert Table" button is clicked
  document.getElementById('insert-table').addEventListener('click', function(event) {
     
       const tableGridContainer = document.getElementById('tableGridContainer');
       tableGridContainer.style.display = tableGridContainer.style.display === 'none' ? 'block' : 'none';
           // Hide the grid if it's visible
     
          createGrid(10, 10); // Create a 10x10 grid
          const rect = event.target.getBoundingClientRect();
          tableGridContainer.style.top = `${rect.bottom + window.scrollY}px`; // Position the dropdown below the button
          tableGridContainer.style.left = `${rect.left}px`; // Align with button's left edge
    
  });

  // Function to create the grid dynamically
  function createGrid(rows, cols) {
      const gridContainer = document.getElementById('tableGrid');
      gridContainer.innerHTML = ''; // Clear previous grid
      
      for (let i = 1; i <= rows; i++) {
          for (let j = 1; j <= cols; j++) {
              const gridCell = document.createElement('div');
              gridCell.className = 'grid-cell';
              gridCell.dataset.row = i;
              gridCell.dataset.col = j;
              gridCell.addEventListener('mousedown', startDrag);
              gridCell.addEventListener('mouseover', duringDrag);
              gridCell.addEventListener('mouseup', stopDrag);
              gridContainer.appendChild(gridCell);
          }
      }
  }

  // Start dragging (when the mouse button is pressed)
  function startDrag(e) {
      isDragging = true;
      startCell = e.target;
      highlightCells(startCell, startCell);
  }

  // Highlight the cells during the drag
  function duringDrag(e) {
      if (isDragging) {
          endCell = e.target;
          highlightCells(startCell, endCell);
      }
  }

  // Highlight the selected area
  function highlightCells(startCell, endCell) {
      const gridCells = document.querySelectorAll('.grid-cell');
      const startRow = parseInt(startCell.dataset.row);
      const startCol = parseInt(startCell.dataset.col);
      const endRow = parseInt(endCell.dataset.row);
      const endCol = parseInt(endCell.dataset.col);

      // Clear previous highlights
      gridCells.forEach(cell => cell.classList.remove('highlighted'));

      // Highlight the cells within the drag area
      gridCells.forEach(cell => {
          const row = parseInt(cell.dataset.row);
          const col = parseInt(cell.dataset.col);

          if (row >= Math.min(startRow, endRow) && row <= Math.max(startRow, endRow) &&
              col >= Math.min(startCol, endCol) && col <= Math.max(startCol, endCol)) {
              cell.classList.add('highlighted');
          }
      });
  }

  // Stop dragging (when mouse is released)
  function stopDrag(e) {
      if (isDragging) {
          isDragging = false;
          endCell = e.target;
          const rows = Math.abs(parseInt(startCell.dataset.row) - parseInt(endCell.dataset.row)) + 1;
          const cols = Math.abs(parseInt(startCell.dataset.col) - parseInt(endCell.dataset.col)) + 1;

          // Insert the table based on the selected area
          insertTable(rows, cols);

          // Hide the grid after selection
          document.getElementById('tableGridContainer').style.display = 'none';
      }
  }

  // Function to insert the table into the editor
  function insertTable(rows, cols) {
    const table = document.createElement('table');
    table.style.width = '100%';
    table.style.borderCollapse = 'collapse';
  
    // Create table rows and cells
    for (let i = 0; i < rows; i++) {
      const tr = document.createElement('tr');
      for (let j = 0; j < cols; j++) {
        const td = document.createElement('td');
        td.style.border = '1px solid #ccc';
        td.style.padding = '5px';
        td.textContent = ''; // Empty cells for editing
        tr.appendChild(td);
      }
      table.appendChild(tr);
    }
  
    // Insert the table into the editor at the current cursor position
    const editor = document.getElementById('editor');
    const selection = window.getSelection();
    const range = selection.getRangeAt(0);

    // Remove any selected content (if any)
    range.deleteContents();
  
    // Insert the table at the cursor position
    range.insertNode(table);
  
    // Move the cursor after the inserted table
    const newRange = document.createRange();
    const newSelection = window.getSelection();
  
    // Place the cursor right after the table
    newRange.setStartAfter(table);
    newRange.setEndAfter(table);
  
    // Remove previous ranges and add the new one
    newSelection.removeAllRanges();
    newSelection.addRange(newRange);
  
    // Ensure the editor scrolls to the bottom if needed
    editor.scrollTop = editor.scrollHeight;
}


  // Close the table grid if clicking outside
  document.addEventListener('click', function(e) {
      const tableGridContainer = document.getElementById('tableGridContainer');
      if (!tableGridContainer.contains(e.target) && !e.target.matches('#insert-table')) {
          tableGridContainer.style.display = 'none';
      }
  });

  // Fullscreen Mode
  document.getElementById('fullscreen').addEventListener('click', () => toggleFullscreen());

  // Font Size and Font Family Changes
  document.getElementById('font-size').addEventListener('change', (e) => {
    document.execCommand('fontSize', false, e.target.value);
  });

  document.getElementById('font-family').addEventListener('change', (e) => {
    document.execCommand('fontName', false, e.target.value);
  });

  // Text Color (Font Color)
  document.getElementById('text-color').addEventListener('input', (e) => {
    document.execCommand('foreColor', false, e.target.value);
  });

  // Highlight Color (Background Color)
  document.getElementById('highlight-color').addEventListener('input', (e) => {
    document.execCommand('hiliteColor', false, e.target.value);
  });

  // Undo and Redo
  document.getElementById('undo').addEventListener('click', () => document.execCommand('undo'));
  document.getElementById('redo').addEventListener('click', () => document.execCommand('redo'));

  // Heading Dropdown Listener
  document.getElementById('heading-select').addEventListener('change', (e) => {
    const selectedHeading = e.target.value;
    document.execCommand('formatBlock', false, selectedHeading);
  });

  document.getElementById('insert-code').addEventListener('click', () => {
    const codeBlock = document.createElement('pre');
    const codeContent = document.createElement('code');
    codeContent.textContent = 'console.log("Hello World!");'; // Sample code
    codeBlock.appendChild(codeContent);
    codeBlock.classList.add('code-block');
  
    const editor = document.getElementById('editor'); // Ensure editor exists
  
    // Insert code block at cursor position
    const selection = window.getSelection();
    const range = selection.getRangeAt(0);
    range.deleteContents(); // Remove any selected text
    range.insertNode(codeBlock); // Insert the code block at the cursor position
  
    // Move the cursor after the inserted code block
    const newRange = document.createRange();
    newRange.setStartAfter(codeBlock);
    newRange.setEndAfter(codeBlock);
  
    selection.removeAllRanges();
    selection.addRange(newRange);
  
    addCopyButtonToCodeBlock(codeBlock);
  });
  
  // Function to add copy button to code block
  function addCopyButtonToCodeBlock(codeBlock) {
    const copyButton = document.createElement('button');
    copyButton.innerText = 'Copy Code';
    copyButton.classList.add('copy-button');
    codeBlock.appendChild(copyButton);
  
    copyButton.addEventListener('click', () => {
      const codeContent = codeBlock.querySelector('code');
      copyToClipboard(codeContent.textContent);
    });
  }
  
  // Function to copy text to clipboard
  function copyToClipboard(text) {
    const textArea = document.createElement('textarea');
    textArea.value = text;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand('copy');
    document.body.removeChild(textArea);
  }
  
  // Function to copy text to clipboard
  function copyToClipboard(text) {
    const textArea = document.createElement('textarea');
    textArea.value = text;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand('copy');
    document.body.removeChild(textArea);
    alert('Code copied to clipboard!');
  }

  // Function to toggle fullscreen mode
  function toggleFullscreen() {
    const editorContainer = document.querySelector('.editor-container');
    if (!document.fullscreenElement) {
      editorContainer.requestFullscreen().catch(err => console.log(err));
    } else {
      document.exitFullscreen();
    }
  }

  editor.addEventListener('dragover', (e) => {
    e.preventDefault();
    e.stopPropagation();
    editor.style.border = '2px dashed #000';  // Visual indicator
  });
  
  editor.addEventListener('dragleave', (e) => {
    e.preventDefault();
    e.stopPropagation();
    editor.style.border = 'none';
  });
  
  editor.addEventListener('drop', (e) => {
    e.preventDefault();
    e.stopPropagation();
  
    const files = e.dataTransfer.files;
    if (files.length > 0) {
      const file = files[0];
      if (file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.alt = 'Dropped Image';
          img.classList.add('resizeable');
          editor.appendChild(img);
          addResizeListener(img); // Add resize functionality
        };
        reader.readAsDataURL(file);  // Read image as base64
      }
    }
  
    editor.style.border = 'none';  // Remove visual indicator
  });
  

  // Toggle command to apply or remove the effect
  function toggleCommand(command) {
    const isApplied = document.queryCommandState(command);
    if (isApplied) {
      document.execCommand(command, false, null);
    } else {
      document.execCommand(command, false, null);
    }
  }

  // Function to add resize functionality to images
  function addResizeListener(img) {
    // Create the resize handle
    const handle = document.createElement('div');
    handle.classList.add('resize-handle');
    img.appendChild(handle);  // Append the resize handle to the image
    
    let isResizing = false;
    
    // Toggle the resize handle when the image is clicked
    img.addEventListener('click', (e) => {
      if (!img.classList.contains('selected')) {
        img.classList.add('selected');
      } else {
        img.classList.remove('selected');
      }
    });
  
    // When resizing starts (click on the resize handle)
    handle.addEventListener('mousedown', (e) => {
      e.preventDefault();
      isResizing = true;
      
      const startX = e.clientX;
      const startY = e.clientY;
      const startWidth = img.offsetWidth;
      const startHeight = img.offsetHeight;
  
      // Add mousemove event to resize the image
      const onMouseMove = (moveEvent) => {
        if (isResizing) {
          const dx = moveEvent.clientX - startX;
          const dy = moveEvent.clientY - startY;
  
          // Resize the image based on mouse movement
          img.style.width = `${startWidth + dx}px`;
          img.style.height = `${startHeight + dy}px`;
        }
      };
  
      // End resizing when mouse is released
      const onMouseUp = () => {
        isResizing = false;
        document.removeEventListener('mousemove', onMouseMove);
        document.removeEventListener('mouseup', onMouseUp);
      };
  
      // Attach mousemove and mouseup events to document
      document.addEventListener('mousemove', onMouseMove);
      document.addEventListener('mouseup', onMouseUp);
    });
  }
  

 // Insert Image
document.getElementById('insert-image').addEventListener('click', () => {
  const imgInput = document.createElement('input');
  imgInput.type = 'file';
  imgInput.accept = 'image/*';
  imgInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        const base64Image = e.target.result;  // Base64 string
        const img = document.createElement('img');
        img.src = base64Image;
        img.alt = 'Image';
        img.classList.add('resizeable'); // Add class for resize

        // Get the current selection and range
        const selection = window.getSelection();
        const range = selection.getRangeAt(0);

        // Delete the selected content, if any
        range.deleteContents();

        // Create a new element for the image wrapper
        const imgWrapper = document.createElement('div');
        imgWrapper.classList.add('resizeable');
        imgWrapper.appendChild(img);

        // Insert the image wrapper at the current cursor position
        range.insertNode(imgWrapper);

        // Optionally, move the cursor after the inserted image (to avoid the cursor being stuck inside the image element)
        const newRange = document.createRange();
        newRange.setStartAfter(imgWrapper);
        newRange.setEndAfter(imgWrapper);
        selection.removeAllRanges();
        selection.addRange(newRange);

        addResizeListener(imgWrapper);  // Add resize functionality if needed
      };
      reader.readAsDataURL(file);  // Read the image as base64 string
    }
  });
  imgInput.click();  // Trigger the file input to select an image
});


  // Event listeners for text alignment buttons (left, center, right)
  document.getElementById('align-left').addEventListener('click', () => {
    document.execCommand('justifyLeft');
  });
  document.getElementById('align-center').addEventListener('click', () => {
    document.execCommand('justifyCenter');
  });
  document.getElementById('align-right').addEventListener('click', () => {
    document.execCommand('justifyRight');
  });

  // Event listener for the blockquote button
  document.getElementById('blockquote').addEventListener('click', () => {
    document.execCommand('formatBlock', false, '<blockquote>');
    const selection = window.getSelection();
    const range = selection.getRangeAt(0);
    const blockquoteElement = range.startContainer.closest('blockquote');
    if (blockquoteElement) {
      blockquoteElement.style.color = 'red'; // Apply the red color to the blockquote
    }
  });
  document.getElementById('insert-youtube').addEventListener('click', () => {
    const videoUrl = prompt('Enter the YouTube video URL:', 'https://www.youtube.com/watch?v=');
    if (videoUrl) {
      const videoId = videoUrl.split('v=')[1];
      const iframe = document.createElement('iframe');
      iframe.src = `https://www.youtube.com/embed/${videoId}`;
      iframe.width = '560';
      iframe.height = '315';
      iframe.frameBorder = '0';
      iframe.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
      iframe.allowFullscreen = true;
  
      const editor = document.getElementById('editor'); // Ensure editor exists
  
      // Insert iframe at cursor position
      const selection = window.getSelection();
      const range = selection.getRangeAt(0);
      range.deleteContents(); // Remove any selected text
      range.insertNode(iframe); // Insert the iframe at the cursor position
  
      // Move the cursor after the inserted iframe
      const newRange = document.createRange();
      newRange.setStartAfter(iframe);
      newRange.setEndAfter(iframe);
  
      selection.removeAllRanges();
      selection.addRange(newRange);
    }
  });

  

  // Listen for input event on the contenteditable div and update the textarea


  
});
