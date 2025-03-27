</div>

<!-- SCRIPT TABLE -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const myTable = document.getElementById('myTable');
        const tbody = myTable.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));
        const pagination = document.getElementById('rfPagination');
        const rowsPerPageSelect = document.getElementById('rowsPerPageSelect');
        const dataInfo = document.getElementById('dataInfo');

        let rowsPerPage = parseInt(rowsPerPageSelect.value);

        function displayPage(page) {
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;

            rows.forEach((row, index) => {
                row.style.display = index >= start && index < end ? '' : 'none';
            });

            const totalDisplayed = Math.min(end, rows.length) - start;
            dataInfo.textContent = `Showing ${totalDisplayed} of ${rows.length} entries`;
        }

        function setupPagination() {
            const totalPages = Math.ceil(rows.length / rowsPerPage);
            pagination.innerHTML = '';

            const ul = document.createElement('ul');
            ul.classList.add('pagination', 'justify-content-end');

            let currentPage = 1;

            function renderButtons() {
                ul.innerHTML = '';

                const prevLi = document.createElement('li');
                prevLi.classList.add('page-item');
                if (currentPage === 1) {
                    prevLi.classList.add('disabled');
                }
                const prevButton = document.createElement('a');
                prevButton.textContent = 'Prev';
                prevButton.classList.add('page-link');
                prevButton.href = '#';
                prevButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    if (currentPage > 1) {
                        currentPage--;
                        displayPage(currentPage);
                        renderButtons();
                    }
                });
                prevLi.appendChild(prevButton);
                ul.appendChild(prevLi);

                const startPage = Math.max(1, currentPage - 1);
                const endPage = Math.min(totalPages, currentPage + 1);

                for (let i = startPage; i <= endPage; i++) {
                    const li = document.createElement('li');
                    li.classList.add('page-item');
                    if (i === currentPage) {
                        li.classList.add('active');
                    }

                    const button = document.createElement('a');
                    button.textContent = i;
                    button.classList.add('page-link');
                    button.href = '#';
                    button.addEventListener('click', (e) => {
                        e.preventDefault();
                        currentPage = i;
                        displayPage(currentPage);
                        renderButtons();
                    });

                    li.appendChild(button);
                    ul.appendChild(li);
                }

                const nextLi = document.createElement('li');
                nextLi.classList.add('page-item');
                if (currentPage === totalPages) {
                    nextLi.classList.add('disabled');
                }
                const nextButton = document.createElement('a');
                nextButton.textContent = 'Next';
                nextButton.classList.add('page-link');
                nextButton.href = '#';
                nextButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    if (currentPage < totalPages) {
                        currentPage++;
                        displayPage(currentPage);
                        renderButtons();
                    }
                });
                nextLi.appendChild(nextButton);
                ul.appendChild(nextLi);
            }

            pagination.appendChild(ul);
            renderButtons();
        }

        rowsPerPageSelect.addEventListener('change', () => {
            rowsPerPage = parseInt(rowsPerPageSelect.value);
            displayPage(1);
            setupPagination();
        });

        displayPage(1);
        setupPagination();
    });

    function searchTable() {
        // Declare variables
        var input, filter, table, tr, td, i, j, txtValue, match;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) { // Start from 1 to skip the header row
            tr[i].style.display = "none"; // Hide the row initially
            td = tr[i].getElementsByTagName("td");
            match = false;
            for (j = 0; j < td.length; j++) { // Loop through all columns
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        match = true;
                        break;
                    }
                }
            }
            if (match) {
                tr[i].style.display = ""; // Show the row if a match is found
            }
        }
    }

    function toggleClearButton() {
        const input = document.getElementById('myInput');
        const clearButton = document.getElementById('clearButton');
        clearButton.style.display = input.value.trim() ? 'block' : 'none';
    }
</script>
<!-- END SCRIPT TABLE -->

<!-- <script src="js/table-rf.js"></script> -->
<script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/dt/dt-2.2.2/datatables.min.js" integrity="sha384-2Ul6oqy3mEjM7dBJzKOck1Qb/mzlO+k/0BQv3D3C7u+Ri9+7OBINGa24AeOv5rgu" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/scripts.js"></script>
</body>

</html>
