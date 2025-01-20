import { clsx } from "clsx";
import { twMerge } from "tailwind-merge"

export function cn(...inputs) {
  return twMerge(clsx(inputs));
}

export const STATUS = {
    TODO: 'To Do',
    INPROGRESS: 'In Progress',
    ONREVIEW: 'On Review',
    DONE: 'Done',
    UNKNOWN: 'Unknown'
}


export const PRIORITY = {
    URGENT: 'Urgent',
    HIGH: 'High',
    MEDIUM: 'Medium',
    LOW: 'Low',
    UNKNOWN: 'Unknown'
};

export function flashMessage(params) {
    return params.props.flash_message; // fungsi dari flash_message ini adalah utk mengambil pesan flash dari parameter yang diterima, ini membantu dlm mendapatkan pesan yg mungkin perlu ditampilkan di antarmuka(UI) pengguna seperti: pesan notifikasi atau konfirmasi setelah suatu action dilakukan
} 
