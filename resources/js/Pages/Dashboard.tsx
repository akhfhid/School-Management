import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

import { DataTable, DataTableSortStatus } from 'mantine-datatable';
import { MantineProvider } from '@mantine/core';
import { useEffect, useState } from 'react';
import sortBy from 'lodash/sortBy';

type anydata = {
    [key: string]: any;
};
export default function Dashboard(dataset: Array<anydata>, set: Array<string>) {
    const rowData = [
        {
            id: 1,
            firstName: 'Caroline',
            lastName: 'Jensen',
            email: 'carolinejensen@zidant.com',
        },
        {
            id: 2,
            firstName: 'Baroline',
            lastName: 'Jensen',
            email: 'carolinejensen@zidant.com',
        },
        {
            id: 3,
            firstName: 'Daroline',
            lastName: 'Jensen',
            email: 'carolinejensen@zidant.com',
        }
    ]
    const [page, setPage] = useState(1);
    const PAGE_SIZES = [10, 20, 30, 50, 100];
    const [pageSize, setPageSize] = useState(PAGE_SIZES[0]);
    const [initialRecords, setInitialRecords] = useState(sortBy(dataset[0], 'id'));
    const [recordsData, setRecordsData] = useState(initialRecords);

    const [sortStatus, setSortStatus] = useState<DataTableSortStatus>({ columnAccessor: 'id', direction: 'asc' });

    useEffect(() => {
        setPage(1);
    }, [pageSize]);

    useEffect(() => {
        const from = (page - 1) * pageSize;
        const to = from + pageSize;
        setRecordsData([...initialRecords.slice(from, to)]);
    }, [page, pageSize, initialRecords]);

    useEffect(() => {
        const data = sortBy(initialRecords, sortStatus.columnAccessor);
        setInitialRecords(sortStatus.direction === 'desc' ? data.reverse() : data);
        setPage(1);
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, [sortStatus]);
    console.log(dataset,initialRecords,recordsData)
    return (
        <>
            <MantineProvider>
                <DataTable
                    noRecordsText="No results match your search query"
                    highlightOnHover
                    className="whitespace-nowrap table-hover"
                    records={recordsData}
                    columns={[
                        { accessor: 'id', title: 'ID', sortable: true, render: ({ id }) => <strong className="text-info">#{id as string}</strong> },
                        {
                            accessor: 'tanggal_ujian',
                            title: 'Tanggal Ujian',
                            sortable: true,
                        },
                        {
                            accessor: 'waktu_ujian',
                            title: 'Durasi',
                            sortable: true,
                        },
                        {
                            accessor: 'mata_pelajaran.nama_mata_pelajaran',
                            title: 'Mata Pelajara',
                        },
                    ]}
                    totalRecords={initialRecords.length}
                    recordsPerPage={pageSize}
                    page={page}
                    onPageChange={(p) => setPage(p)}
                    recordsPerPageOptions={PAGE_SIZES}
                    onRecordsPerPageChange={setPageSize}
                    sortStatus={sortStatus}
                    onSortStatusChange={setSortStatus}
                    minHeight={200}
                    paginationText={({ from, to, totalRecords }) => `Showing  ${from} to ${to} of ${totalRecords} entries`}
                />
            </MantineProvider>
        </>
    )
}
